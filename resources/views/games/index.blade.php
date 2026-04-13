<x-main>

    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Timetable</p>
                <p class="subtitle is-3">Which games are when and where?</p>

            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <div class="card">
                            <div class="card-content">
                                <table class="table is-striped">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Playfield</th>
                                        <th>Division</th>
                                        <th>A</th>
                                        <th>B</th>
                                        <th>Referee</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($matches as $match)
                                        <tr>
                                            <td>{{ $match->date }}</td>
                                            <td>{{ $match->time }}</td>
                                            <td>{{ $match->playfield }}</td>
                                            <td>{{ $match->division }}</td>
                                            <td>{{ $match->team_a }}</td>
                                            <td>{{ $match->team_b }}</td>
                                            <td>{{ $match->team_ref }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>
