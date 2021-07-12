@extends('layouts.app')

@section('content')

<div class="set">

    <div class="bande">
        <nav>
                
                <div class="nav-links2">
                    <ul>
                        <li><a href="Recruteur_setting.html"><img src="iconfinder_103765_close_user_settings_icon_512px.png" alt="profile" height="80" width="80"></a></li>
                        <li><a href="messagesseting.html"><img src="iconfinder_1564504_email_letter_mail_message_icon_512px.png" alt="Messages" height="80" width="80"></a></li>
                        <li><a href="offersetting.html"><img src="iconfinder_2205218_folder_document_file_organize_icon_512px.png" alt="offers" height="80" width="80"></a></li>
                    </ul>
                </div>
            
            
        </nav>

        </div>

    <h1> Messages </h1>
    <div class="table">
    <table id="stagiaire">
        <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Date</td>
        <td>Message</td>
        </tr>
        @foreach($applications as $application)
        <tr>
        <td>{{ $application->name }}</td>
        <td>{{ $application->email }}</td>
        <td>{{ $application->created_at }}</td>
        <td>{{ $application->message }}</td>
        </tr>
        @endforeach
    </table>
    </div>

</div>
@endsection