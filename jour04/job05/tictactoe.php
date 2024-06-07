<?php
class TicTacToe
{
  private int $rows = 3;
  private int $columns = 3;
  private array $grid = [];

  function __construct()
  {
    for ($i = 0; $i < $this->rows; $i++) {
      $this->grid[$i] = [];

      for ($j = 0; $j < $this->columns; $j++) {
        $this->grid[$i][$j] = "-";
      }
    }
  }

  function getRows(): int
  {
    return $this->rows;
  }

  function getColumns(): int
  {
    return $this->columns;
  }

  function getGrid(): array
  {
    return $this->grid;
  }

  function setCell(int $i, int $j, string $value): void
  {
    $this->grid[$i][$j] = $value;
  }
}
