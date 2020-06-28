@extends('layouts.app')

@section('title', 'School Enrolment Records')

@section('content')
    <form>
        <div class="row">
            <div class="col-2">
                <label for="year">Year:</label>    
                <select name="year" id="year">
                    <option value="">Select Year</option>
                    @foreach($year as $y)
                        @if($y->year == $current) 
                        <option value="{{ $y->year }}" selected>{{ $y->year }}</option>
                        @else
                        <option value="{{ $y->year }}">{{ $y->year }}</option>
                        @endif
                        
                    @endforeach
                </select>
            </div>
            <div class="col-8">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>School Code</th>
                <th>School Name</th>
                <th>Enrolment Records</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schools as $school)
                <tr>
                    <td>{{ $school->school_code }}</td>
                    <td>{{ $school->school_name }}</td>
                    <td>
                        <div class="row">
                            <div class="col">Year</div>
                            <div class="col">No. Of Students</div>
                        </div>
                        
                        @foreach($school->enrolments as $enrolment)                        
                            <div class="row">
                                <div class="col">{{ $enrolment->year }}</div>
                                <div class="col">{{ $enrolment->no_of_students }}</div>
                            </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>{{ $schools->appends($_GET)->links() }}</div>
@endsection