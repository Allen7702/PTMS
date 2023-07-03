@extends('organization.layout')

@section('content')


<div class="max-w-lg mx-auto p-4 md:p-8 lg:p-10 md:m-10">
    <h2 className="mr-4 text-sm">Apply for Practical Training Students</h2>
    <div class="bg-white shadow-lg rounded-2xl p-6">
        <p>Please fill the criteria for student(s) that you can offer Practical Training to</p>
        <form action="/applicationstore" method="POST">
            @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="text-gray-700 font-semibold">Select Department</label>
                        <select name="department" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option value="Computer Science and Engineering">Computer Science and Engineering </option>
                            <option value="COET">COET</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="text-gray-700 font-semibold">Select Course</label>
                        <select id="course" name="course" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option value="Computer Science" >Computer Science</option>
                            <option value="Computer Science and Engeneering" >Computer Science and Engeneering</option>
                            <option value="Telecommunication and electronics" >Telecommunication and electronics</option>
                            <option value="Electronic Engineering" >Electronic Engineering</option>
                        </select>
                     </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="text-gray-700 font-semibold">Select College*</label>
                        <select id="college" name="college" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option value="College of Information and Communication Technologies (COICT)">College of Information and Communication Technologies (COICT)</option>
                            <option value="College of Engineering and Technology (CoET)">College of Engineering and Technology (CoET)</option>
                            <option value="College of Engineering and Technology (CoET)">College of Humanities (CoHU)</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="text-gray-700 font-semibold">Select Year</label>
                        <select id="year" name="year" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                        </select>
                     </div>
                </div>

            <div class="col-span-1">
            <label class="text-gray-700 font-semibold">Number of Students</label>
            <input type="number" id="number_students" name="number_students"  class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            
            <div class="flex justify-start mt-6">
                <button class="bg-gray-200 bgcolor hover:bg-blue-700  font-bold py-2 px-4 rounded">
                Submit
                </button>
            </div>
        </form>

    </div>
</div>

@endsection