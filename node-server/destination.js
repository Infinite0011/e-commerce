const util = require('util');

// const { connDB } = require('./db/db_connection');
const conn2service = require('./db/conn2');
const axios = require('axios');

async function uploadData() {
  let page = 1;
  while(true) {
    const response = await axios.get('https://sugarmds.com/wp-json/wp/v2/posts?per_page=1&page=' + page)
    const posts = response.data;
    posts.forEach(post => {
      insertData(post);
    })
    page ++;
    if (posts.length == 0) {
      break;
    }
  }
}

function insertData(post) {
    try {
        const conn2 = conn2service.createConnection();
        conn2.connect(function(err) {
          if (err) throw err;
          console.log("Connected!");
          var values = [
            [post.title.rendered, post.content.rendered, post.yoast_head_json.og_image[0].url, 'published', post.yoast_head_json.description, post.date, post.modified]
          ];
          conn2.query("INSERT INTO blogs (title, description, image, status, meta_description, created_at, updated_at) VALUES ?", [values], function (err, result) {
            if (err) throw err;
            console.log("1 record inserted");
          });
        });
        // queryDb("INSERT INTO blogs (title, description, image, status, meta_description) VALUES ?", [post.title.rendered, post.content.rendered, post.yoast_head_json.og_image[0].url, 'published', post.yoast_head_json.description]);
    } catch (e) {
        console.log('e', e);
    }
}

async function uploadCategoryData() {

  let page = 1;
  while(true) {
    const response = await axios.get('https://sugarmds.com/wp-json/wp/v2/categories?per_page=100&page=' + page)
    const posts = response.data;
    posts.forEach(post => {
      insertCategoryData(post);
    })
    page ++;
    if (posts.length == 0) {
      break;
    }
  }
}

function insertCategoryData(post) {
  try {
      const conn2 = conn2service.createConnection();
      conn2.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
        var values = [
          [post.name, post.slug]
        ];
        conn2.query("INSERT INTO categories (name, slug) VALUES ?", [values], function (err, result) {
          if (err) throw err;
          console.log("1 record inserted");
        });
      });
      // queryDb("INSERT INTO blogs (title, description, image, status, meta_description) VALUES ?", [post.title.rendered, post.content.rendered, post.yoast_head_json.og_image[0].url, 'published', post.yoast_head_json.description]);
  } catch (e) {
      console.log('e', e);
  }
}

async function uploadTagData() {

  let page = 1;
  while(true) {
    const response = await axios.get('https://sugarmds.com/wp-json/wp/v2/tags?per_page=100&page=' + page)
    const posts = response.data;
    posts.forEach(post => {
      insertTagData(post);
    })
    page ++;
    if (posts.length == 0) {
      break;
    }
  }
}

function insertTagData(post) {
  try {
      const conn2 = conn2service.createConnection();
      conn2.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
        var values = [
          [post.name, post.slug]
        ];
        conn2.query("INSERT INTO tags (name, slug) VALUES ?", [values], function (err, result) {
          if (err) throw err;
          console.log("1 record inserted");
        });
      });
      // queryDb("INSERT INTO blogs (title, description, image, status, meta_description) VALUES ?", [post.title.rendered, post.content.rendered, post.yoast_head_json.og_image[0].url, 'published', post.yoast_head_json.description]);
  } catch (e) {
      console.log('e', e);
  }
}

async function uploadCustomerData() {

  let page = 1;
  while(true) {
    const response = await axios.get('https://sugarmds.com/wp-json/wp/v2/categories?per_page=100&page=' + page)
    const posts = response.data;
    posts.forEach(post => {
      insertCustomerData(post);
    })
    page ++;
    if (posts.length == 0) {
      break;
    }
  }
}

function insertCustomerData(post) {
  try {
      const conn2 = conn2service.createConnection();
      conn2.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
        var values = [
          [post.name, post.slug]
        ];
        conn2.query("INSERT INTO categories (name, slug) VALUES ?", [values], function (err, result) {
          if (err) throw err;
          console.log("1 record inserted");
        });
      });
      // queryDb("INSERT INTO blogs (title, description, image, status, meta_description) VALUES ?", [post.title.rendered, post.content.rendered, post.yoast_head_json.og_image[0].url, 'published', post.yoast_head_json.description]);
  } catch (e) {
      console.log('e', e);
  }
}

uploadCategoryData();
uploadTagData();
// uploadCustomerData();
// uploadData();
