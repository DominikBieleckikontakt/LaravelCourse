<x-layout>
  <x-slot:heading>Jobs page</x-slot>
  <div class="space-y-4">
  @foreach($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:scale-105 duration-300">
      <div class="font-semibold text-md text-blue-500">{{ $job->employer->name }}</div>  
      <div class="text-lg">
            <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
        </div>
    </a>
  @endforeach
  <div>
    {{ $jobs->links() }}
  </div>
  </div>
</x-layout>
