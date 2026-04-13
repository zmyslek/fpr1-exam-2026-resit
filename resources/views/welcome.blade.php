<x-article>
    <x-slot name="image">/img/mbv_banner.jpg</x-slot>
    <section class="hero  is-small">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-multiline is-centered">

                    <div class="column is-3">
                        <div class="box has-background-warning">
                            <i class="fas fa-2x fa-fish"></i> <i class="fas fa-2x fa-drumstick-bite"></i><br>
                            For fish and meat specialties and North African menus, visit:
                            www.dummyrestaurant.nl
                        </div>
                    </div>

                    <div class="column is-9">
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-128x128">
                                        <img src="/img/pickpocket.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Don’t give pickpockets a chance</strong>
                                            <br>
                                            Check your coat pockets...
                                            <br>
                                            Don’t leave valuable items in the dressing room!!!
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="columns">

        <div class="column is-8-desktop is-12-tablet">
            <article class="content">
                <h1>Welcome on the MBV website.</h1>
                <h2>Wat does the MBV do?</h2>
                <p>
                    The MBV is organizing a volleyball competition for teams from: companies, neighborhood/sports clubs,
                    casual teams, etc., etc.. The MBV is more than just a volleyball competition – it’s a great
                    opportunity to meet new people, stay active, and have fun in a friendly and competitive environment.
                    Whether you’re a seasoned player or just starting out, the MBV welcomes teams of all levels to join
                    and enjoy the spirit of the game. Don’t miss out on this exciting community event!
                </p>
                <h3>Where and when?</h3>
                <p>
                The matches will be played on Tuesday evenings in the sports hall "De Kruitmolen" in Middelburg.
                </p>
                <h3>Rules of play</h3>
                <p>
                    The games are played according to NEVOBO rules.
                    <br>
                    <i>However, there are exceptions!</i>
                </p>
                <ol>
                    <li>Matches are played within a set time limit.</li>
                    <li>A maximum of 4 sets will be played.</li>
                </ol>
                <h3>Information</h3>
                <p>
                    If you would like more information about the MBV competition, you can contact:
                    <br>
                    The secretary: 0118-626280 or the match organizer: 0639626675
                </p>
                <p>
                    Volleyball is a dynamic and exciting sport that combines teamwork, strategy, and physical fitness.
                    It’s a game that brings people together, encouraging communication and collaboration on and off the
                    court. Whether you’re spiking, blocking, or diving for the ball, volleyball offers a thrilling
                    experience for players and spectators alike. It’s the perfect way to stay active, have fun, and
                    build lasting connections with your teammates.
                </p>
            </article>
        </div>

        <div class="column is-4-desktop is-12-tablet">
            <p class="title is-4">Latest news</p>

            <div class="columns is-multiline">

                @foreach($latestArticles as $article)
                    <div class="column is-12">
                        <div class="card">

                            <div class="card-image">
                                <img src="{{ $article->img_url }}" alt="Article picture">
                            </div>

                            <div class="card-content">
                                <div class="content">

                                    <a class="title is-4" href="/articles/{{$article->id}}">{{$article->title}}</a>

                                    <p>{{$article->excerpt}}</p>
                                </div>
                                <div class="has-text-centered">
                                    <a href="/articles/{{$article->id}}" class="button is-primary">Read more...</a>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item"><small>Published: {{ $article->published_at->diffForHumans() }}</small></p>
                            </footer>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-article>
