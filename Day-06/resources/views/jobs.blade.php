<x-layout>
   <x-slot:heading>
       Jobs Page
   </x-slot:heading>
    <h1>Hello from Jobs Page</h1>
    @foreach($jobs as $job)
      <h1>{{$job['title']}}</h1>
        <p>{{$job['salary']}} Per Year</p>
    @endforeach
</x-layout>
