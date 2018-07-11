<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\User;
use App\Requests\SaveUserRequest;

class UserService implements UserServiceInterface {

    public function findAll(): Collection {

    	return User::all();

    }

    public function findById(int $id): ?User {

    	return User::find($id) ? User::find($id) : null;

    }

    public function save(SaveUserRequest $request): User {

    	if ($request->getId() !== null) {

    		$user = $this->findById($request->getId());

    	} else {

	    	$user = new User();

	    }

	    $user->name = $request->getName();
	    $user->email = $request->getEmail();
	    $user->save();

        return $user;

    }

    public function delete(int $id): void {

    	User::destroy($id);

    }

}