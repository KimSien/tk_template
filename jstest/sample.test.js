import assert  from 'power-assert';
import Sample  from '../develop/js/sample.es6.js';
import {Floor} from '../develop/js/sample.es6.js';
 
describe( 'Sample.sum()', () => {
  it( '合計', () => {
    const sample = new Sample();
    const sum    = sample.sum( 1, 2 );
    assert( sum === 3 );
  } );
 
  it( '不正な型による例外発行', () => {
    assert.throws(
      () => {
        const sample = new Sample();
        sample.sum();
      },
      Error
    );
  } );
} );
 
describe( 'Floor()', () => {
  it( '整数化', () => {
    const value = Floor( 42.195 );
    assert( value === 42 );
  } );
} );