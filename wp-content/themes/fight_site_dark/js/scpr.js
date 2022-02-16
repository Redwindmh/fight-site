const PORT = 8000;
const axios = require("axios");
const { text } = require("body-parser");
const cheerio = require("cheerio");
const { find } = require("domutils");
const { response } = require("express");
const express = require("express");

const app = express();

const url =
  "https://www.sherdog.com/stats/fightfinder?SearchTxt=&weight=&association=Pancrase+Inagakigumi";
// const url2 =
//   "https://www.sherdog.com/stats/fightfinder?association=Pancrase+Inagakigumi&weightclass=&SearchTxt=&page=2";

const fighters = [];

axios(url)
  .then((response) => {
    const html = response.data;
    const $ = cheerio.load(html);
    $("tr", html).each(function () {
      //   const fighter = $(this).find("td").text();
      const name = $(this).find("td:nth-child(2)").text();
      const nickname = $(this).find("td:nth-child(3)").text();
      const height = $(this).find("td:nth-child(4)").text();
      const weight = $(this).find("td:nth-child(5)").text();
      const gym = $(this).find("td:nth-child(6)").text();
      fighters.push({
        // fighter,
        name,
        nickname,
        height,
        weight,
        gym,
      });
    });
    console.log(fighters);
  })
  .catch((err) => console.log(err));

app.listen(PORT, () => console.log("server running on port " + PORT));
