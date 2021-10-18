<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Address;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.member', [
        "title" => "Member"
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return ('bsaijda');
        $insertMember = $request->validate([
           'name' => '',
           'email' => '',
           'phone' => ''
           
        ]);
        $getMemberId = Member :: create($insertMember);

        $insertMemberId = $getMemberId->id; //untuk mendapatkan id member

        $insertMemberAddress = $request->validate([
           'village' => '',
           'subdistrict' => '',
           'city' => '',
           'province' => '',
           'detail' => '',
           'code' => ''
           
        ]);
        $insertMemberAddress ['member_id']= $insertMemberId;
        $getMemberAddressId = Address :: create($insertMemberAddress);
        dd($getMemberAddressId);

    //    $insertMemberAddress = $request->validate([
    //        'name' => 'required|max:255',
    //        'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:users',
    //        'phone' => 'required'
           
    //    ]);

    //    return redirect ('/member')->with('success', 'Berhasill Menambahkan Data'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
