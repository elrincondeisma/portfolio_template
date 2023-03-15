var Storage = require("./storage");
var cookie = require("./cookie");

var _storage_support = true;

try {
  window.localStorage.setItem("test", "42");
  window.sessionStorage.setItem("test", "42");
} catch (e) {
  _storage_support = false;
}

if (_storage_support) {
  window.localStorage.removeItem("test");
  window.sessionStorage.removeItem("test");

  module.exports = {
    localStorage: window.localStorage,
    sessionStorage: window.sessionStorage,
  };
} else {
  var lsCookie = cookie.read("localStorage");

  var ls = new Storage(
    lsCookie ? JSON.parse(lsCookie) : {}, // init
    function (data) {
      // set
      cookie.create("localStorage", JSON.stringify(data), 365);
    },
    function () {
      // clear
      cookie.create("localStorage", "", 365);
    }
  );

  var ss = new Storage();

  module.exports = {
    localStorage: ls,
    sessionStorage: ss,
  };
}
