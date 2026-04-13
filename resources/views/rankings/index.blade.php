<x-main>

    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Rankings</p>
                <p class="subtitle is-3">Which teams are leading the competition?</p>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        @foreach($pools as $division)
                            <div class="column is-12">
                                <div class="card">

                                    <div class="card-content">
                                        <div class="content">
                                            <p class="title is-12">Division: {{$division->division}}</p>
                                        </div>
                                        <table class="table is-striped">
                                            <thead>
                                            <tr>
                                                <th>Ranking</th>
                                                <th>Team</th>
                                                <th>w</th>
                                                <th>p</th>
                                                <th>sv</th>
                                                <th>st</th>
                                                <th>s</th>
                                                <th>str.p</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- Define ranking --}}
                                            @php($rank = 1)
                                            @foreach($division->rankings as $ranking)
                                                {{-- Render the ranking and data of each Ranking model --}}
                                                <tr>
                                                    <td>{{ $rank }}</td>
                                                    <td>{{ $ranking->team }}</td>
                                                    <td>{{ $ranking->w }}</td>
                                                    <td>{{ $ranking->p }}</td>
                                                    <td>{{ $ranking->sv }}</td>
                                                    <td>{{ $ranking->st }}</td>
                                                    <td>{{ $ranking->computeS() }}</td>
                                                    <td>{{ $ranking->str_p }}</td>
                                                </tr>
                                                {{-- increase ranking number for next Ranking model --}}
                                                @php($rank++)
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>
