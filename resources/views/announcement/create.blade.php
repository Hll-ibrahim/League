@extends('layouts.index')
@section('content')
    <div class="site-content">
        <div class="container">
            <form action="{{ route('announcement.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card p-4">
                            <h4 class="mb-3">Create Announcement</h4>
                            <p class="text-muted">Share important updates with your teams, leagues, and players</p>

                            <!-- Title -->
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" required placeholder="Enter announcement title...">
                            </div>

                            <!-- Description -->
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" rows="4" required placeholder="Write your announcement details here..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Publish Announcement</button>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <!-- Teams -->
                        <div class="card mb-4 p-3">
                            <h5>Teams</h5>
                            @foreach($teams as $team)
                                <div class="form-check">
                                    <input type="radio" name="team_id" value="{{ $team->id }}" class="form-check-input" id="team_{{ $team->id }}">
                                    <label class="form-check-label" for="team_{{ $team->id }}">{{ $team->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Leagues -->
                        <div class="card mb-4 p-3">
                            <h5>Leagues</h5>
                            @foreach($leagues as $league)
                                <div class="form-check">
                                    <input type="radio" name="league_id" value="{{ $league->id }}" class="form-check-input" id="league_{{ $league->id }}">
                                    <label class="form-check-label" for="league_{{ $league->id }}">{{ $league->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Players -->
                        <div class="card mb-4 p-3">
                            <h5>Players</h5>
                            @foreach($players as $player)
                                <div class="form-check">
                                    <input type="radio" name="player_id" value="{{ $player->id }}" class="form-check-input" id="player_{{ $player->id }}">
                                    <label class="form-check-label" for="player_{{ $player->id }}">{{ $player->last_name }} - {{ $player->first_name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
