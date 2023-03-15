# storage2

[![Build Status](https://travis-ci.org/swiftcarrot/storage2.svg)](https://travis-ci.org/swiftcarrot/storage2) [![codecov.io](http://codecov.io/github/swiftcarrot/storage2/coverage.svg?branch=master)](http://codecov.io/github/swiftcarrot/storage2?branch=master)

HTML5 storage interface for node and browser

- `node`: simple memory storage
- `browser with storage api available`: return global storage object directly (`window.localStorage` and `window.sessionStorage`)
- `browser without storage api`: cookie fallback

### Installation

```sh
npm install storage2 --save
```

### Usage

```javascript
var ls = require("storage2").localStorage;
var ss = require("storage2").sessionStorage;
```

For safari private mode, `localStorage` and `sessionStorage` will still be available globally but storage usage will cause an exception. `localStorage = require('storage2').localStorage` is not recommended and a different variable name like `ls` should always be used.

### API

[Web Storage API](https://developer.mozilla.org/en-US/docs/Web/API/Storage)

### License

ISC
