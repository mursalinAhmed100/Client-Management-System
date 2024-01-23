<?php

// ROOT

Route::get('/', 'ClientControllerTest@TestIndex')->name('clients');




// FOR CLIENT

Route::any('/clients', 'ClientControllerTest@TestIndex')->name('clients');

Route::any('/clients/filter', 'ClientControllerTest@TestFilterClients')->name('clients.filter');


Route::get('/client/search', 'ClientControllerTest@TestSearchClientView')->name('client.search');

Route::post('/client/search', 'ClientControllerTest@TestSearchClient')->name('client.search.submit');


Route::get('/client/add', 'ClientControllerTest@TestAddClientView')->name('client.add');

Route::post('/client/add', 'ClientControllerTest@TestAddClient')->name('client.add.submit');


Route::post('/client/remove/{client_id}/{type}', 'ClientControllerTest@TestRemoveClient')->name('client.remove');


Route::get('/client/edit/{client_id}', 'ClientControllerTest@TestEditClientView')->name('client.edit');

Route::post('/client/edit/{client_id}', 'ClientControllerTest@TestEditClient')->name('client.edit.submit');


Route::get('/clients/upload', 'ClientControllerTest@TestUploadClients')->name('clients.upload');

Route::post('/clients/import', 'ClientControllerTest@TestImport')->name('clients.import');

Route::post('/clients/export', 'ClientControllerTest@TestExport')->name('clients.export');




// FOR SOURCE MAIN CODE

// Route::get('/sources', 'SourceController@index')->name('sources');

// Route::get('/source/add', 'SourceController@addSourceView')->name('source.add');

// Route::post('/source/add', 'SourceController@addSource')->name('source.add.submit');

// Route::post('/source/remove/{source_id}', 'SourceController@removeSource')->name('source.remove');

// Route::get('/source/edit/{source_id}', 'SourceController@editSourceView')->name('source.edit');

// Route::post('/source/edit/{source_id}', 'SourceController@editSource')->name('source.edit.submit');




// SOURCE TEST CODE

Route::get('/sources', 'SourceControllerTest@TestIndex')->name('sources');

Route::get('/source/add', 'SourceControllerTest@TestAddSourceView')->name('source.add');

Route::post('/source/add', 'SourceControllerTest@TestAddSource')->name('source.add.submit');

Route::post('/source/remove/{source_id}', 'SourceControllerTest@TestRemoveSource')->name('source.remove');

Route::get('/source/edit/{source_id}', 'SourceControllerTest@TestEditSourceView')->name('source.edit');

Route::post('/source/edit/{source_id}', 'SourceControllerTest@TestEditSource')->name('source.edit.submit');





// FOR SERVICE MAIN CODE

// Route::get('/services', 'ServiceController@index')->name('services');

// Route::get('/service/add', 'ServiceController@addServiceView')->name('service.add');

// Route::post('/service/add', 'ServiceController@addService')->name('service.add.submit');

// Route::post('/service/remove/{service_id}', 'ServiceController@removeService')->name('service.remove');

// Route::get('/service/edit/{service_id}', 'ServiceController@editServiceView')->name('service.edit');

// Route::post('/service/edit/{service_id}', 'ServiceController@editService')->name('service.edit.submit');


// SERVICE TEST CODE

Route::get('/services', 'ServiceControllerTest@TestIndex')->name('services');

Route::get('/service/add', 'ServiceControllerTest@TestAddServiceView')->name('service.add');

Route::post('/service/add', 'ServiceControllerTest@TestAddService')->name('service.add.submit');

Route::post('/service/remove/{service_id}', 'ServiceControllerTest@TestRemoveService')->name('service.remove');

Route::get('/service/edit/{service_id}', 'ServiceControllerTest@TestEditServiceView')->name('service.edit');

Route::post('/service/edit/{service_id}', 'ServiceControllerTest@TestEditService')->name('service.edit.submit');








// FOR PERSON

// Route::get('/persons', 'PersonController@index')->name('persons');

// Route::get('/person/add', 'PersonController@addPersonView')->name('person.add');

// Route::post('/person/add', 'PersonController@addPerson')->name('person.add.submit');

// Route::post('/person/remove/{person_id}', 'PersonController@removePerson')->name('person.remove');

// Route::get('/person/edit/{person_id}', 'PersonController@editPersonView')->name('person.edit');

// Route::post('/person/edit/{person_id}', 'PersonController@editPerson')->name('person.edit.submit');

//PERSON TEST CODE
Route::get('/persons', 'PersonControllerTest@TestIndex')->name('persons');

Route::get('/person/add', 'PersonControllerTest@TestAddPersonView')->name('person.add');

Route::post('/person/add', 'PersonControllerTest@TestAddPerson')->name('person.add.submit');

Route::post('/person/remove/{person_id}', 'PersonControllerTest@TestRemovePerson')->name('person.remove');

Route::get('/person/edit/{person_id}', 'PersonControllerTest@TestEditPersonView')->name('person.edit');

Route::post('/person/edit/{person_id}', 'PersonControllerTest@TestEditPerson')->name('person.edit.submit');



// FOR LEAD STATUS

// Route::get('/leadstatuses', 'LeadStatusControllerTest@index')->name('leadstatuses');

// Route::get('/leadstatus/add', 'LeadStatusControllerTest@addLeadStatusView')->name('leadstatus.add');

// Route::post('/leadstatus/add', 'LeadStatusControllerTest@addLeadStatus')->name('leadstatus.add.submit');

// Route::post('/leadstatus/remove/{lead_status_id}', 'LeadStatusControllerTest@removeLeadStatus')->name('leadstatus.remove');

// Route::get('/leadstatus/edit/{lead_status_id}', 'LeadStatusControllerTest@editLeadStatusView')->name('leadstatus.edit');

// Route::post('/leadstatus/edit/{lead_status_id}', 'LeadStatusControllerTest@editLeadStatus')->name('leadstatus.edit.submit');


Route::get('/leadstatuses', 'LeadStatusControllerTest@TestIndex')->name('leadstatuses');

Route::get('/leadstatus/add', 'LeadStatusControllerTest@TestAddLeadStatusView')->name('leadstatus.add');

Route::post('/leadstatus/add', 'LeadStatusControllerTest@TestAddLeadStatus')->name('leadstatus.add.submit');

Route::post('/leadstatus/remove/{lead_status_id}', 'LeadStatusControllerTest@TestRemoveLeadStatus')->name('leadstatus.remove');

Route::get('/leadstatus/edit/{lead_status_id}', 'LeadStatusControllerTest@TestEditLeadStatusView')->name('leadstatus.edit');

Route::post('/leadstatus/edit/{lead_status_id}', 'LeadStatusControllerTest@TestEditLeadStatus')->name('leadstatus.edit.submit');



// FOR MEETING

Route::get('/meetings', 'MeetingControllerTest@TestIndex')->name('meetings');

Route::any('/meetings/filter', 'MeetingControllerTest@TestFilterMeetings')->name('meetings.filter');

Route::get('/meeting/add', 'MeetingControllerTest@TestAddMeetingView')->name('meeting.add');

Route::post('/meeting/add', 'MeetingControllerTest@TestAddMeeting')->name('meeting.add.submit');

Route::post('/meeting/remove/{meeting_id}', 'MeetingControllerTest@TestRemoveMeeting')->name('meeting.remove');

Route::get('/meeting/edit/{meeting_id}', 'MeetingControllerTest@TestEditMeetingView')->name('meeting.edit');

Route::post('/meeting/edit/{meeting_id}', 'MeetingControllerTest@TestEditMeeting')->name('meeting.edit.submit');
