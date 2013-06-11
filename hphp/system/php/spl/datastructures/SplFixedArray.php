<?php

// This doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.splfixedarray.php )
 *
 * The SplFixedArray class provides the main functionalities of array. The
 * main differences between a SplFixedArray and a normal PHP array is that
 * the SplFixedArray is of fixed length and allows only integers within the
 * range as indexes. The advantage is that it allows a faster array
 * implementation.
 *
 */
class SplFixedArray implements Iterator, ArrayAccess, Countable {

  protected $data = array();

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.construct.php )
   *
   * Initializes a fixed array with a number of NULL values equal to size.
   *
   * @size       mixed   The size of the fixed array. This expects a number
   *                     between 0 and PHP_INT_MAX.
   *
   * @return     mixed   No value is returned.
   */
  public function __construct($size = 0) {
    $this->setSize($size);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.current.php )
   *
   * Get the current array element.
   *
   * @return     mixed   The current element value.
   */
  public function current() {
    return current($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.key.php )
   *
   * Returns the current array index.
   *
   * @return     mixed   The current array index.
   */
  public function key() {
    return key($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.next.php )
   *
   * Move the iterator to the next array entry.
   *
   * @return     mixed   No value is returned.
   */
  public function next() {
    next($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.rewind.php )
   *
   * Rewinds the iterator to the beginning.
   *
   * @return     mixed   No value is returned.
   */
  public function rewind() {
    reset($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.valid.php )
   *
   * Checks if the array contains any more elements.
   *
   * @return     mixed   Returns TRUE if the array contains any more
   *                     elements, FALSE otherwise.
   */
  public function valid() {
    return key($this->data) !== NULL;
  }


  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.offsetexists.php )
   *
   * Checks whether the requested index index exists.
   *
   * @index      mixed   The index being checked.
   *
   * @return     mixed   TRUE if the requested index exists, otherwise FALSE
   */
  public function offsetExists($index) {
    if (!is_int($index) && !is_numeric($index)) {
      throw new RuntimeException("Index invalid or out of range");
    }
    return $index < count($this->data);
  }

  private function validateIndex($index) {
    if ($index >= count($this->data) || $index < 0 ||
        (!is_int($index) && !is_numeric($index))) {
      throw new RuntimeException("Index invalid or out of range");
    }
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.offsetget.php )
   *
   * Returns the value at the index index.
   *
   * @index      mixed   The index with the value.
   *
   * @return     mixed   The value at the specified index.
   */
  public function offsetGet($index) {
    $this->validateIndex($index);
    return $this->data[$index];
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.offsetset.php )
   *
   * Sets the value at the specified index to newval.
   *
   * @index      mixed   The index being set.
   * @newval     mixed   The new value for the index.
   *
   * @return     mixed   No value is returned.
   */
  public function offsetSet($index, $newval) {
    $this->validateIndex($index);
    $this->data[$index] = $newval;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.offsetunset.php )
   *
   * Unsets the value at the specified index.
   *
   * @index      mixed   The index being unset.
   *
   * @return     mixed   No value is returned.
   */
  public function offsetUnset($index) {
    $this->offsetSet($index, null);
  }


  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.count.php )
   *
   * Returns the size of the array.
   *
   * @return     mixed   Returns the size of the array.
   */
  public function count() {
    return count($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.setsize.php )
   *
   * Change the size of an array to the new size of size. If size is less
   * than the current array size, any values after the new size will be
   * discarded. If size is greater than the current array size, the array
   * will be padded with NULL values.
   *
   * @size       mixed   The new array size. This should be a value between 0
   *                     and PHP_INT_MAX.
   *
   * @return     mixed   No value is returned.
   */
  public function setSize($size) {
    if (!is_int($size)) {
      return;
    }
    if ($size < 0) {
      throw new Exception('array size cannot be less than zero');
    }
    if ($size < count($this->data)) {
      $this->data = array_slice($this->data, 0, $size);
    } else if ($size > count($this->data)) {
      $this->data = array_pad($thid->data, $size, null);
    }
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.getsize.php )
   *
   * Gets the size of the array.
   *
   * @return     mixed   Returns the size of the array, as an integer.
   */
  public function getSize() {
    return count($this->data);
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.toarray.php )
   *
   * Returns a PHP array from the fixed array.
   *
   * @return     mixed   Returns a PHP array, similar to the fixed array.
   */
  public function toArray() {
    return $this->data;
  }

  // This doc comment block generated by idl/sysdoc.php
  /**
   * ( excerpt from http://php.net/manual/en/splfixedarray.fromarray.php )
   *
   * Import the PHP array array in a new SplFixedArray instance
   *
   * @array      mixed   The array to import.
   * @save_indexes
   *             mixed   Try to save the numeric indexes used in the original
   *                     array.
   *
   * @return     mixed   Returns an instance of SplFixedArray containing the
   *                     array content.
   */
  public static function fromArray($array, $save_indexes = true) {
    $fixed_array = new self;
    if ($save_indexes) {
      foreach ($array as $key => $value) {
        if (!is_int($key) || $key < 0) {
          throw new Exception('array must contain only positive integer keys');
        }
        if ($key >= $fixed_array->count()) {
          $fixed_array->setSize($key + 1);
        }
        $fixed_array[$key] = $value;
      }
    } else {
      $fixed_array->data = array_values($array);
    }
    return $fixed_array;
  }
}
