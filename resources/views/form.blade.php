@extends('layout')
@section('content')
    <div class="max-w-4xl px-4 lg:px-0 py-12 lg:py-24 mx-auto">
        <form action="/form" method="post" enctype="multipart/form-data" class="grid grid-cols-2 gap-4">
            @csrf
            <div class="col-span-2 gap-4 grid grid-cols-2">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone">
                </div>
            </div>
            <div class="col-span-2">
                <label for="email">Email Address</label>
                <input type="email" name="email">
            </div>
            @if($type == 'marketing' || $type == 'sales')
                <div class="col-span-2">
                    <label for="location">Location</label>
                    <input type="text" name="location">
                </div>
                <div class="col-span-2">
                    <label for="email">Type Of Connection</label>
                    <select>
                        @if($type == 'marketing')
                            <option selected value="SPONSORSHIP">SPONSORSHIP</option>
                            <option value="PARTNERSHIP">PARTNERSHIP</option>
                            <option value="GENERAL">GENERAL</option>
                        @endif
                        @if($type == 'sales')
                            <option selected value="DISTRIBUTOR">DISTRIBUTOR</option>
                            <option value="WHOLESALE">WHOLESALE</option>
                            <option value="RETAILER">RETAILER</option>
                            <option value="GENERAL">GENERAL</option>
                        @endif
                    </select>
                </div>
            @endif
            @if($type == 'team')
                <div class="col-span-2">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject">
                </div>

                <div class="col-span-2">
                    <label for="cv">CV</label>
                    <input type="file" name="cv">
                </div>
                <div class="col-span-2">
                    <label for="cover_letter">Cover Letter</label>
                    <input type="file" name="cover_letter">
                </div>
            @endif
            <div class="col-span-2">
                <label for="message">Message</label>
                <textarea class="h-32" name="message"></textarea>
            </div>

            <div class="col-span-2 flex items-center justify-center">
                <button class="bg-primary text-white rounded-full px-8 py-3  mt-8">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
