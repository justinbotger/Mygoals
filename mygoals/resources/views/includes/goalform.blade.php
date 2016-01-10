<div class="form_field">
    {!! Form::label('title', 'Goal Title') !!}
    {!! Form::text('title') !!}
</div>
<div class="form_field">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description') !!}
</div>
<div class="category">
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', array('artistic' => 'Artistic',
                                       'attitude' => 'Attitude',
                                       'career' => 'Career',
                                       'education' => 'Education',
                                       'family' => 'Family',
                                       'financial' => 'Financial',
                                       'physical' => 'Physical',
                                       'pleasure' => 'Pleasure',
                                       'public_service' => 'Public Service',
                                       'travel' => 'Travel')) !!}
</div>
<div class="deadline">
    {!! Form::label('deadline', 'Deadline') !!}
    {!! Form::date('deadline') !!}
</div>
<div class="submit">
    {!! Form::submit('Set Goal') !!}
</div>