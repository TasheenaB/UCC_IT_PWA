@extends('layouts.app')

@section('title', 'Admissions - UCC IT Department')
@section('heading', 'Admissions')

@section('content')

    <!-- Jamaican students -->
    <div class="info-card">
        <h2>ENTRY REQUIREMENTS FOR JAMAICAN STUDENTS</h2>
        <ul class="checks">
            <li>To be unconditionally admitted into UCC undergraduate programmes, applicants must possess a minimum of five (5) subjects at the GCE or CSEC level (including mandatory English Language and Mathematics) at grades A, B, C or 1, 2, 3 respectively. A CSEC Grade 3 must have been obtained since 1998.</li>
            <li>Candidates with four (4) CXCs may apply pending outstanding subjects or may opt to complete UCC replacement courses: Core Mathematics, English for Academic Purposes, and Fundamentals of Accounting.</li>
            <li>Applicants may apply under the Mature Entry option. Candidates must be at least 25 years old with a minimum of five (5) years of work experience. Academic qualifications, r&eacute;sum&eacute;, job letter, and three professional references are required.</li>
        </ul>
    </div>

    <!-- Honours -->
    <div class="info-card">
        <h2>HONOURS PROGRAMME</h2>
        <p>Students with eight (8) CXC/GCE subjects including Mathematics and English Language at Grade 1 may qualify for a 25% tuition waiver during the first year.</p>
    </div>

    <!-- International students -->
    <div class="info-card">
        <h2>International Students - General Admissions</h2>
        <ul class="checks">
            <li>An application fee (non-refundable) of US$100 (<a href="{{ $payUrl }}" target="_blank" rel="noopener">pay here &raquo;</a>)</li>
            <li>Application for Admission (<a href="{{ $applyUrl }}" target="_blank" rel="noopener">here &raquo;</a>)</li>
            <li>High school diploma, GED, or Certificate of Equivalency / Proficiency (with minimum Grade Point Average of 2.5 from high school)</li>
            <li>Passes in 5 GCE O Level passes at A, B or C including Mathematics and English or International Baccalaureate (IB) or other international qualification deemed equivalent (subject to UCC approval)</li>
            <li>One electronic passport size photo</li>
            <li>Copy of passport information page</li>
            <li>Financial documentation demonstrating that the student can support him/herself during his/her stay in Jamaica (to be sent along with completed UCC Affidavit of Support Form)</li>
            <li>Official Transcripts of all secondary school (and other universities) coursework and grades (translated in English). &ldquo;Official&rdquo; means that the applicant must request that his school send transcripts directly to the UCC Registry (registry@ucc.edu.jm OR uccadmissions@ucc.edu.jm). These transcripts must be evaluated by one of the following organizations:
                <ul class="plain">
                    <li><a href="http://www.acei1.com" target="_blank" rel="noopener">http://www.acei1.com</a></li>
                    <li><a href="http://www.ierf.org" target="_blank" rel="noopener">http://www.ierf.org</a></li>
                    <li><a href="http://www.wes.org" target="_blank" rel="noopener">http://www.wes.org</a></li>
                </ul>
            </li>
        </ul>

        <a href="{{ $applyUrl }}" target="_blank" rel="noopener" class="btn btn-apply">Apply to UCC</a>
    </div>
@endsection
