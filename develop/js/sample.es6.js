import Util from './util.es6.js';
 
export default class Sample {
  sum( a, b ) {
    // ES6 modules を試すため、別クラスのメソッドを呼ぶ
    return Util.sum( a, b );
  }
 
  exists( arr, target ) {
    if( !( arr && 0 < arr.length && arr.indexOf ) ) { return false; }
 
    return ( arr.indexOf( target ) !== -1 );
  }
}
 
// 関数を公開
export function Floor( value ) {
  return Math.floor( value );
}