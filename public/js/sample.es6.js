'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

exports.Floor = Floor;

var _utilEs = require('./util.es6.js');

var _utilEs2 = _interopRequireDefault(_utilEs);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Sample = function () {
  function Sample() {
    _classCallCheck(this, Sample);
  }

  _createClass(Sample, [{
    key: 'sum',
    value: function sum(a, b) {
      // ES6 modules を試すため、別クラスのメソッドを呼ぶ
      return _utilEs2.default.sum(a, b);
    }
  }, {
    key: 'exists',
    value: function exists(arr, target) {
      if (!(arr && 0 < arr.length && arr.indexOf)) {
        return false;
      }

      return arr.indexOf(target) !== -1;
    }
  }]);

  return Sample;
}();

// 関数を公開


exports.default = Sample;
function Floor(value) {
  return Math.floor(value);
}
//# sourceMappingURL=sample.es6.js.map
