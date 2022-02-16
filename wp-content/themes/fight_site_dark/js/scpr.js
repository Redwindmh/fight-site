const PORT = 8000;
const axios = require("axios");
const cheerio = require("cheerio");
const { find } = require("domutils");
const { response } = require("express");
const express = require("express");

const app = express();

const url =
  "https://www.sherdog.com/stats/fightfinder?SearchTxt=&weight=&association=Pancrase+Inagakigumi";

const fighters = [];

axios(url)
  .then((response) => {
    const html = response.data;
    const $ = cheerio.load(html);
    $("tr", html).each(function () {
      const fighter = $(this).find("td").text;
      fighters.push({
        fighter,
      });
    });
    console.log(fighters);
  })
  .catch((err) => console.log(err));

app.listen(PORT, () => console.log("server running on port " + PORT));
