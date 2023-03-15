var Storage = require("./storage");

module.exports = {
  localStorage: new Storage(),
  sessionStorage: new Storage(),
};
