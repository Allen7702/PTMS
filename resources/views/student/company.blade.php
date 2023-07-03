@extends('layouts.navbar')

@section('content')
<div class="flex flex-row upper mt-2">
      <div class="w-1/2 ml-6 mt-2 mb-3 text-2xl text-color-rgba (119, 119,119, 1) justify-center">
        Company vacancies
      </div>
      <div class="w-1/2">
      <div class="flex items-center">
  <div class="relative">
    <input
      type="text"
      class="border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:border-blue-500"
      placeholder="Search"
    />
    <span class="absolute right-3 top-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M15 11a4 4 0 11-8 0 4 4 0 018 0z"
        />
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M21 21l-4-4"
        />
      </svg>
    </span>
  </div>

  <div class="relative ml-4">
    <button
      class="flex items-center border border-gray-300 rounded-full py-2 px-4 focus:outline-none"
    >
      <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16"
          />
        </svg>
      </span>
      <span>Filters</span>
    </button>
    <ul class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-lg hidden">
      <li class="px-4 py-2 hover:bg-gray-100">
        Current Academic Year
      </li>
      <li class="px-4 py-2 hover:bg-gray-100">
        Add Custom Filter
      </li>
    </ul>
  </div>

  <div class="relative ml-4">
    <button
      class="flex items-center border border-gray-300 rounded-full py-2 px-4 focus:outline-none"
    >
      <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
          />
        </svg>
      </span>
      <span>Group by</span>
    </button>
    <ul class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-lg hidden">
      <li class="px-4 py-2 hover:bg-gray-100">
        Add Custom Group
      </li>
    </ul>
  </div>

  <div class="relative ml-4">
    <button
      class="flex items-center border border-gray-300 rounded-full py-2 px-4 focus:outline-none"
    >
      <span class="mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-gray-400">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 14l9-5-9-5-9 5 9 5z"
          />
        </svg>
      </span>
      <span>Favourites</span>
    </button>
    <ul class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-lg hidden">
      <li class="px-4 py-2 hover:bg-gray-100">
        Save Current Search
      </li>
    </ul>
  </div>
</div>

<script>
  // Show dropdown on hover
  const dropdowns = document.querySelectorAll(".relative");
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("mouseenter", () => {
      dropdown.querySelector("ul").classList.remove("hidden");
    });
    dropdown.addEventListener("mouseleave", () => {
      dropdown.querySelector("ul").classList.add("hidden");
    });
  });
</script>

    </div>
    
    </div>

    <!-- table section -->
    <div class="flex">
<div class="w-full">
<table class="w-full border border-black-300">
  <thead>
    <tr class="bg-gray-200">
      <th>Company</th>
      <th>Region</th>
      <th>Academic Year</th>
      <th>Year of Study &amp; Course</th>
      <th>Remaining Chances</th>
      <th>Days until open</th>
    </tr>
  </thead>
  <tbody>
   <tr class="border-bottom">
    <td>Medikea Afya App</td>
    <td>Dar es Salaam</td>
    <td>3rd Year</td>
    <td>3rd Year(CS & CEIT)</td>
    <td class="px-5">10</td>
    <td class="px-5">1</td>
</tr>
   <tr class="border-bottom">
    <td>Finhub</td>
    <td>Dar es Salaam</td>
    <td>2nd Year</td>
    <td>2nd Year(BIT)</td>
    <td class="px-5">3</td>
    <td class="px-5">3</td>
</tr>
   <tr class="border-bottom">
    <td>Y4c</td>
    <td>Dar es Salaam</td>
    <td>1st Year</td>
    <td>1st Year(Telecom and EE)</td>
    <td class="px-5">6</td>
    <td class="px-5">2</td>
</tr>
  
    <!-- Table rows go here -->
  </tbody>
</table>

</div>
@endsection