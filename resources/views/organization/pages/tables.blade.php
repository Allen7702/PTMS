@extends('organization.layout')

@section('content')

      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                      <h6>Students table</h6>
                  </div>
                  <div class="flex-auto px-0 pt-0 pb-2">
                      <div class="p-0 overflow-x-auto">
                          <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                              <thead class="align-bottom">
                                  <tr>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Student Name</th>
                                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Course</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Department</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Year</th>
                                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">College</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <!-- For each student, add a new row with the format below -->
                                  <tr>
                                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <!-- Student Name -->
                                          <p class="mb-0 text-sm leading-normal">John Michael</p>
                                      </td>
                                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <!-- Course -->
                                          <p class="mb-0 text-sm leading-normal">Computer Science</p>
                                      </td>
                                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <!-- Department -->
                                          <p class="mb-0 text-sm leading-normal">Science & Technology</p>
                                      </td>
                                      <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <!-- Year -->
                                          <p class="mb-0 text-sm leading-normal">3</p>
                                      </td>
                                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                          <!-- College -->
                                          <p class="mb-0 text-sm leading-normal">MIT</p>
                                      </td>
                                  </tr>
                                  <!-- End of student row -->
                                  <!-- Copy and repeat the row for each student with the appropriate details -->
                              </tbody>
                          </table>
                      </div>
                    </div>
      
       
      </div>
 
@endsection
