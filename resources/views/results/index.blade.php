<x-main>

    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Results</p>
                <p class="subtitle is-3">Who won from who?</p>

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
                                        <th>Division</th>
                                        <th>A</th>
                                        <th>B</th>
                                        <th colspan="2">Result</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($results as $result)
                                        <tr>
                                            <td>{{ $result->date }}</td>
                                            <td>{{ $result->time }}</td>
                                            <td>{{ $result->division }}</td>
                                            <td>{{ $result->team_a }}</td>
                                            <td>{{ $result->team_b }}</td>
                                            <td>{{ $result->points_a }}</td>
                                            <td>{{ $result->points_b }}</td>
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
