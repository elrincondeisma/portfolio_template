module.exports = function (obj) {
  var n = 0;
  for (var k in obj) {
    if (obj.hasOwnProperty(k)) {
      n += 1;
    }
  }

  return n;
};
