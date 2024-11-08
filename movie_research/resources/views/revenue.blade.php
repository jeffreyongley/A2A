<!-- resources/views/tasks.blade.php -->
<x-layout>
    <div class='container'>
        <div class='h-100 d-flex align-items-center justify-content-center'>Get Revenue</div>
        <form method = "POST" action="{{ action('revenueController@getRevenue') }}">
            @csrf
            <label for="date">Enter Date as YYYY-MM-DD</label>
            <input name=date></input>
            <button type="submit">Submit</button>
        </form>
    </div>
</x-layout>


{{-- <div class='container'>
    <div class='h-100 d-flex align-items-center justify-content-center'>Get Revenue</div>
    <form>
        <label for="select-film">Select Film</label>
        <select id="select-film">
        @foreach($films as $film)
            <option>{{$film->film_name}}</option>
        @endforeach
        </select>
    </form>
</div> --}}


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

