<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class X {
  public function foo(): void {}
}

function test1(): (function(X): void) {
  return meth_caller('X', 'foo');
}

function test2(): (function(X): void) {
  return meth_caller(X::class, 'foo');
}
