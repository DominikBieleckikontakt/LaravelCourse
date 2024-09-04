<x-layout>
  <x-slot:heading>Jobs page</x-slot>
  <ul>
  @foreach($jobs as $job)
      <li>
          <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
              <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
          </a>
      </li>
  @endforeach
  </ul>
</x-layout>
