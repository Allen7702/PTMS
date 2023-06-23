@extends('organization.layout')

@section('content')


<div class="max-w-lg mx-auto p-4 md:p-8 lg:p-10 md:m-10">
    <div class="bg-white shadow-lg rounded-2xl p-6">
        <form>
          
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="text-gray-700 font-semibold">Select Department</label>
                        <select class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option>Department 1</option>
                            <option>Department 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="text-gray-700 font-semibold">Select Course</label>
                        <select class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option>Course 1</option>
                            <option>Course 2</option>
                            <!-- Add more options as needed -->
                        </select>
                     </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="text-gray-700 font-semibold">Select College*</label>
                        <select class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option>College 1</option>
                            <option>College 2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="text-gray-700 font-semibold">Select Year</label>
                        <select class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-4 py-2">
                            <option>Year 1</option>
                            <option>Year 2</option>
                            <!-- Add more options as needed -->
                        </select>
                     </div>
                </div>

                <div class="col-span-1">
                    <label class="text-gray-700 font-semibold">Number of Students</label>
                    <input type="number"  class="appearance-none block w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                </div>
            
            <div class="flex justify-start mt-6">
                <button class="bg-gray-200 bgcolor hover:bg-blue-700  font-bold py-2 px-4 rounded">
                    Submit
                  </button></div>
        </form>

    </div>
</div>

@endsection