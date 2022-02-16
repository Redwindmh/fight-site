const PORT = 8000;
const axios = require("axios");
const cheerio = require("cheerio");
const { find } = require("domutils");
const { response } = require("express");
const express = require("express");

const app = express();

const url = "https://www.japantimes.co.jp/";

const articles = [];

axios(url)
  .then((response) => {
    const html = response.data;
    const $ = cheerio.load(html);
    $(".index-loop-article", html).each(function () {
      const title = $(this).find("p").text();
      const url = $(this).find("a").attr("href");
      articles.push({
        title,
        url,
      });
    });
    console.log(articles);
  })
  .catch((err) => console.log(err));

app.listen(PORT, () => console.log("server running on port " + PORT));
