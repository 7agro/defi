<?php

namespace App\Infrastructure\Controllers\Operations;

trait Destroy
{
    public function destroy(int $id)
    {
        return $this->repository->remove($id);
    }
}
