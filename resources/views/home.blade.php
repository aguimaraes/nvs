@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">AAPL</div>

                <div class="panel-body">
                    <div id="chart-container">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Favorites</div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="#">AAPL</a>
                        </li>
                        <li><a href="#">AVHI</a></li>
                        <li><a href="#">AIR</a></li>
                        <li><a href="#">WMS</a></li>
                        <li><a href="#">ALG</a></li>
                        <li><a href="#">AP</a></li>
                        <li><a href="#">ARCW</a></li>
                        <li><a href="#">BZH</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h2>News <small>keywords: aapl, apple, iphone, ios, macbook, mac, macos</small></h2>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tempora dolorem sequi natus esse libero distinctio doloribus aperiam, illum delectus necessitatibus alias ipsam, itaque quo. Aut repudiandae quam corporis cum.</p>
                    <p class="news-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo mollitia accusamus odit unde deserunt, iusto numquam nihil corrupti dolores earum, ipsam consequatur. Quaerat fugit in doloribus laudantium ab, itaque harum.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Illo debitis voluptatum, dolore quia illum neque adipisci temporibus molestias corrupti numquam voluptate aliquid, minus corporis facilis, assumenda impedit nam repellat dolor cupiditate id officia? Praesentium blanditiis porro vero, magnam.</p>
                    <p class="news-body">Optio fugit dolorum animi perferendis, hic qui incidunt aut enim perspiciatis delectus suscipit accusamus vero quia, beatae pariatur voluptatibus ex ratione illum, accusantium recusandae a. Voluptatem, facere. Quam, ad, vero.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Dicta libero hic magni voluptatibus ducimus incidunt voluptatem culpa facilis temporibus quibusdam! Consectetur dolores laborum eum autem blanditiis placeat odio provident numquam eveniet, neque omnis sequi consequuntur optio ut nesciunt.</p>
                    <p class="news-body">Vitae, voluptates impedit nihil cum eveniet eaque laboriosam assumenda ratione architecto dolor. Aperiam delectus odit reprehenderit blanditiis, tempora alias. Perferendis ducimus reprehenderit debitis vero molestiae doloremque culpa architecto veritatis modi.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Aliquam minima ratione, distinctio veniam labore possimus obcaecati consequatur, quisquam, voluptates, nesciunt quaerat! Architecto, laboriosam. Numquam laudantium sint quasi repudiandae voluptas possimus omnis similique earum. Quos, harum, eveniet. Error, ipsum.</p>
                    <p class="news-body">Pariatur voluptate reprehenderit nostrum aliquam cupiditate ipsum mollitia fugit illo eaque! Illum blanditiis quis ipsa ab in ea, numquam ullam repudiandae vel! Odio cum ducimus necessitatibus atque repellendus iste ipsum!</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Incidunt assumenda eligendi delectus quos asperiores ratione qui adipisci sed id laboriosam nesciunt tempora quisquam, praesentium dignissimos ducimus nulla sint nam! Officia dolor quas voluptates repellat natus, ipsum quo autem!</p>
                    <p class="news-body">Omnis, explicabo tenetur. Tempore nihil officia, eaque voluptas aliquid repellat maxime, laboriosam perspiciatis, libero saepe fuga quibusdam, rem error reiciendis molestias quasi! Odio impedit iste officia deleniti, optio omnis, enim.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Illo cum nobis velit doloribus explicabo aliquid minus dicta voluptas molestiae quod nisi quos, rerum praesentium nihil commodi nesciunt? Eveniet consectetur quo esse incidunt illum ut repellendus alias sunt minima.</p>
                    <p class="news-body">Quaerat molestiae iste, sequi tenetur earum velit nihil quo in voluptate ab, asperiores distinctio, vitae non enim. Saepe distinctio totam repellat hic cum, similique voluptatem ipsum. Officia repellat, nemo. Labore.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Non et iste iure soluta tenetur, sapiente facilis quidem inventore repellat rem quo animi! Rerum voluptatibus quasi fugiat provident, delectus, itaque aliquid asperiores incidunt qui fuga ipsa expedita culpa molestias.</p>
                    <p class="news-body">Magnam veritatis nesciunt nostrum repellat ab quos perspiciatis, repudiandae aperiam eligendi veniam nemo vel voluptatum deleniti ad blanditiis natus iure! Maiores numquam quae delectus corporis. Laborum itaque, saepe omnis numquam.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Accusantium rerum odio odit consequatur quidem, adipisci fuga, quasi inventore maiores repudiandae sint enim. Quos porro consequatur quae quisquam maiores expedita animi minus ad aliquid dignissimos laudantium, impedit, voluptas repellat.</p>
                    <p class="news-body">Natus architecto similique consectetur quisquam. Quasi delectus expedita praesentium doloribus necessitatibus animi quis neque consequuntur, ab aspernatur excepturi nulla, dignissimos eum molestiae culpa obcaecati aliquam veritatis earum eveniet, sit labore!</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Nemo, dignissimos ullam nam. Odio quibusdam praesentium sint iste commodi eos consectetur dolorem voluptas quidem magnam et excepturi deserunt repellat natus, labore repudiandae quo culpa esse ducimus cupiditate eius accusamus.</p>
                    <p class="news-body">Tempora vel et rem dolore recusandae numquam natus excepturi ab illo perferendis ut iusto dolorum, at velit qui accusamus, odit temporibus quo commodi molestias non culpa laudantium eligendi consequuntur! Neque.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
            <div class="news panel panel-default">
                <div class="panel-body">
                    <p class="news-title">Nesciunt atque aperiam nemo nisi fugiat, reprehenderit saepe quas culpa vitae ea? Cum commodi modi dicta in, perspiciatis odit, voluptatibus. Aliquam maxime tempora in quis at, recusandae laudantium minima veritatis.</p>
                    <p class="news-body">Quia magnam ad impedit, natus nobis iure cumque! Laudantium inventore nobis placeat ab nisi eius asperiores, in nulla veniam, culpa, impedit! Iure incidunt possimus nesciunt, voluptas. Quod tenetur aperiam voluptatibus.</p>
                </div>
                <div class="panel-footer"><a href="#" class="btn btn-primary">Read more</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
