<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;
use phpDocumentor\Reflection\Types\Boolean;
use View;
use DB;
use ArrayObject;
use stdClass;

class DatabaseController extends Controller
{
    public function FetchData($id)
    {
        $databaseStuff = User::all();//DB::table('users')->where('id', '=', 1)->orWhere('id', '=', 3)->select(['name', 'password'])->get();//User::all()

        $parsedUsersTable = new ArrayObject();

        for($j = 0; $j < count($databaseStuff); $j++)//$databaseStuff as $row
        {
            $row = $databaseStuff[$j];
            $parsedUsersTable->append(new stdClass());

            $isKey = $isProcessing = new Boolean();//list($isKey, $isProcessing) = array(new ArrayObject(), new ArrayObject());
            $isKey = true;
            $isProcessing = false;

            $temporaryKey = "";

            $currentlyParsedWord = "";

            for ($i = 0; $i < strlen($row->__toString()); $i++)
            {
                $actuallLetter = $row->__toString()[$i];

                if (!$isProcessing)
                {
                    if ($actuallLetter == '"')
                        $isKey = $isProcessing = true;
                    else if ($actuallLetter == ':')
                    {
                        $isKey = false;
                        $isProcessing = true;

                        if ($row->__toString()[$i + 1] == '"')
                            $i++;//I think, it isn't a good solution...
                    }
                }
                else
                {
                    if ($actuallLetter == '"' || $actuallLetter == ',' || ( $i + 1 == strlen($row->__toString()) && $actuallLetter == '}' )) // (||) $actuallLetter == ':' -> Maybe there is not any case which it can be possible in... (because the keys are perhapas always strings...)
                    {
                        $isProcessing = false;

                        if ($isKey)
                        {
                            $temporaryKey = $currentlyParsedWord;

                            $isKey = false;
                        }
                        else
                        {
                            $parsedUsersTable[$j]->{$temporaryKey} = $currentlyParsedWord;

                            $isKey = true;
                            $temporaryKey = "";
                        }

                        $currentlyParsedWord = "";
                    }
                    else
                        $currentlyParsedWord .= $actuallLetter;
                }
            }
        }

        return View::make('database')->with(array(
                'parsedUsersTable' => $parsedUsersTable,
                'test' => $databaseStuff[0]->email
            ));
    }

    public function ShowConcreteUsersData($id)
    {
        $databaseStuff = User::all();

        return View::make('user')->with('userChoosedById', $databaseStuff[$id]->__toString());
    }
}
