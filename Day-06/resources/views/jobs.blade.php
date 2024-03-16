<x-layout>
   <x-slot:heading>
       Jobs Page
   </x-slot:heading>
    <h1>Hello from Jobs Page</h1>
    @foreach($jobs as $job)
       <li> {{ $job['title'] }} Pay {{$job['salary']}} Per Years</li>
    @endforeach
</x-layout>
