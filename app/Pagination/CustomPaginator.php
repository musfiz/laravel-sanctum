<?php

namespace App\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;

class CustomPaginator extends LengthAwarePaginator
{
  /**
   * Get the instance as an array.
   *
   * @return array
   */
  public function toArray()
  {
    return [
      'data'      => $this->items->toArray(),
      'page'      => $this->currentPage(),
      'per_page'  => $this->perPage(),
      'total'     => $this->total(),
    ];
  }
}
