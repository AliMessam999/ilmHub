<?php

namespace App\Http\Controllers;

use App\Models\CdContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show_contact()
    {
        $contacts = CdContact::orderBy('created_at', 'desc')->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function delete_contact($id)
    {
        if (!$id) {
            return response()->json(['message' => 'Please enter the id of contact for deleting'], 302);
        }
        if (CdContact::where('id', $id)->count() > 0) {
            $contact = CdContact::where('id', $id)->delete();
            if ($contact) {
                return response()->json(['message' => 'Contact Message Deleted Successfully'], 200);
            } else {
                return response()->json(['message' => 'Something went wrong!'], 302);
            }
        } else {
            return response()->json(['message' => 'Record not found or already deleted'], 302);
        }
    }
}