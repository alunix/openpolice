<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OpenPoliceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
    	
    	
		DB::table('users')->insert([
			'id'				=> '1',
			'name' 				=> 'openpolice',
			'email' 			=> 'open@openpolice.org',
			'password' 			=> '$2y$10$c0k2Dwv8sJbIo2vkjv0AL.rkDW85PwoI0TYTX4aAfLYX4ANqDrQfu',
			'remember_token' 	=> 'Ovi11OLl5ucripOKVURZFzpRSlYMsaAzcMcyJ4G5FHSDbS9kUGdkOfbdSltx'
		]);
		DB::table('SL_UsersRoles')->insert([
			'RoleUserUID' 		=> '1',
			'RoleUserRID' 		=> '15'
		]);
		
		
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'app-url')
			->update([ 'DefDescription' => 'homestead.app' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'logo-url')
			->update([ 'DefDescription' => 'homestead.app' ]);

		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'cust-abbr')
			->update([ 'DefDescription' => 'OpenPolice' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'site-name')
			->update([ 'DefDescription' => 'Open Police' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'meta-title')
			->update([ 'DefDescription' => 'Open Police Complaints: Share Your Story' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'meta-desc')
			->update([ 'DefDescription' => 'Open Police Complaints helps victims of police misconduct create, save, and share first-rate digital police complaints. Let\'s make your story matter!' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'meta-keywords')
			->update([ 'DefDescription' => 'Open Police, Open Police Complaints, Police Departments, Cops, Police, Officers, file complaint, submit, victims, accountability, #BlackLivesMatter, #BLM, transparency, open source' ]);

		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'shortcut-icon')
			->update([ 'DefDescription' => '/openpolice/logo-ico.png' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'logo-img-lrg')
			->update([ 'DefDescription' => '/openpolice/logo-img-lrg.svg' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'logo-img-md')
			->update([ 'DefDescription' => '/openpolice/logo-img-md.svg' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'logo-img-sm')
			->update([ 'DefDescription' => '/openpolice/logo-img-sm.svg' ]);
		DB::table('SL_Definitions')
			->where('DefDatabase', 1)
			->where('DefSet', 'System Settings')
			->where('DefSubset', 'meta-img')
			->update([ 'DefDescription' => '/openpolice/mata-img.png' ]);
		
		
		
		
		
		

		DB::table('SL_Databases')->insert([
			'DbID' => 1,
			'DbUser' => '1',
			'DbPrefix' => 'OP_',
			'DbName' => 'Open Police Complaints',
			'DbDesc' => 'The nation\'s most trusted police complaints service',
			'DbMission' => 'The purpose of the Open Police Complaints (OPC) database is to maintain the data we collect from users and to supply information that supports the work of police oversight professionals throughout the United States.',
			'DbOpts' => '2',
			'DbTables' => '47',
			'DbFields' => '496'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeName' => 'Open Police Complaint',
			'TreeRootURL' => 'https://app.openpolicecomplaints.org',
			'TreeRoot' => '3',
			'TreeFirstPage' => '667',
			'TreeLastPage' => '529',
			'TreeCoreTable' => '112'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Primary Public Navigation',
			'TreeName' => 'Open Police Complaint'
		]);
		
		
		
		DB::table('SL_Tables')->insert([
			'TblID' => 102,
			'TblDatabase' => '1',
			'TblAbbr' => 'Civ',
			'TblName' => 'Civilians',
			'TblEng' => 'Civilians',
			'TblDesc' => 'Individuals who are directly impacted by, observed, or are reporting on an police incident. This information allows us to identify and contact individuals who\'ve been impacted by alleged incident.',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '24',
			'TblNumFields' => '14',
			'TblNumForeignKeys' => '4',
			'TblNumForeignIn' => '7'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 104,
			'TblDatabase' => '1',
			'TblAbbr' => 'Off',
			'TblName' => 'Officers',
			'TblEng' => 'Officers',
			'TblDesc' => 'Includes law enforcement personnel who engaged in alleged misconduct or who witnessed alleged misconduct mentioned in a Complaint. This information is vital for verifying the identity of named and unnamed officers who were involved in alleged police misconduct.',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '25',
			'TblNumFields' => '19',
			'TblNumForeignKeys' => '4',
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 106,
			'TblDatabase' => '1',
			'TblAbbr' => 'Over',
			'TblName' => 'Oversight',
			'TblEng' => 'Oversight Agencies',
			'TblDesc' => 'These are the organizations tasked with receiving and investigating Civilian Complaints against Officers. This information helps us keep track of who is investigating Complaints submitted through OPC.',
			'TblNotes' => 'There are 2 types of Oversight Agencies: Internal Affairs (IA) & Citizen Oversight Agencies (COAs). Every police department has an Internal Affairs contact â?? but many medium and larger municipalities also have a COA tasked with receiving and investigating citizen complaints. COAs are generally more responsive than IAs. THEREFORE, if a police department has a NACOLE-approved COA, the table data must ONLY contain COA contact information â?? but no IA contact information.',
			'TblGroup' => 'People & Groups Involved In Complaint Process',
			'TblOrd' => '31',
			'TblNumFields' => '38',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 108,
			'TblDatabase' => '1',
			'TblAbbr' => 'Adm',
			'TblName' => 'Administrators',
			'TblEng' => 'Administrators',
			'TblDesc' => 'OPC staff and volunteers with special access permission to review and manage Complaints. This information allows OPC management to measure the performance of individual Administrators.',
			'TblGroup' => 'People & Groups Involved In Complaint Process',
			'TblOrd' => '33',
			'TblActive' => '0',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 110,
			'TblDatabase' => '1',
			'TblAbbr' => 'Part',
			'TblName' => 'Partners',
			'TblEng' => 'Partners',
			'TblDesc' => 'People and organizations who access our detailed complaints data to assist their police accountability efforts and research. Information in this table is vital to the organization, because it enables us to communicate with Partners about our collaboration and service offerings.',
			'TblNotes' => 'Partners may also include prospects.',
			'TblGroup' => 'People & Groups Involved In Complaint Process',
			'TblOrd' => '32',
			'TblActive' => '0',
			'TblNumFields' => '6',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 111,
			'TblDatabase' => '1',
			'TblAbbr' => 'Dept',
			'TblName' => 'Departments',
			'TblEng' => 'Police Departments',
			'TblDesc' => 'Includes Local, State, and Federal law enforcement agencies and their jurisdictional boundaries. This table information allows the organization to identify and track Departments associated with Complaints.',
			'TblNotes' => 'Data obtained thanks to Prof. Hickman.',
			'TblGroup' => 'People & Groups Involved In Complaint Process',
			'TblOrd' => '30',
			'TblNumFields' => '17',
			'TblNumForeignIn' => '5'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 112,
			'TblDatabase' => '1',
			'TblAbbr' => 'Com',
			'TblName' => 'Complaints',
			'TblEng' => 'Complaints',
			'TblDesc' => 'Reports of dissatisfaction that contain one or more Allegations of Officer misconduct. Complaints are vital, because they provide the essential store of information for communicating what happened during a police encounter. Complaints data also helps the organization keep track of how various police accountability professionals are responding to Complaint Allegations.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOpts' => '11',
			'TblNumFields' => '38',
			'TblNumForeignKeys' => '3',
			'TblNumForeignIn' => '13'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 113,
			'TblDatabase' => '1',
			'TblAbbr' => 'Alle',
			'TblName' => 'Allegations',
			'TblEng' => 'Allegations',
			'TblDesc' => 'Represent specific misconduct accusations against Officers, vital to identifying the most serious Complaints. This information also helps OPC provide useful next-steps advice for Complainants who generate Complaints. This table provides storage for the descriptions of why each Allegation has been made, and a record to link with Officers and/or Victims.',
			'TblNotes' => 'San Jose IPA has model categories

http://www.sanjoseca.gov/DocumentCenter/View/29599',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '4',
			'TblNumFields' => '5',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 114,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inc',
			'TblName' => 'Incidents',
			'TblEng' => 'Incidents',
			'TblDesc' => 'Represent individual, uninterrupted police events occurring at a specific time and place. Incident information is vital for identifying and associating data from multiple Complaints with each other.',
			'TblNotes' => 'Generally, we have a goal of one-complaint-per-incident. But in cases where Complaint data is inconsistent, Incident data allows us to simply associate them with each other in a less invasive way.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '1',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 115,
			'TblDatabase' => '1',
			'TblAbbr' => 'Scn',
			'TblName' => 'Scenes',
			'TblEng' => 'Scenes',
			'TblDesc' => 'Scene information provides descriptive details about the setting where an Incident occurred. Beyond mere time and location, this adds an important contextual backdrop behind specific Incident events. Scene information also helps provide a more objective evaluation of the Incident and Allegations.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '2',
			'TblNumFields' => '7',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 116,
			'TblDatabase' => '1',
			'TblAbbr' => 'For',
			'TblName' => 'Force',
			'TblEng' => 'Force',
			'TblDesc' => 'Includes all Allegations that feature use of violent contact up to and including deadly Force by an Officer. Because excessive Force Allegations deserve the greatest scrutiny, this information is vital to substantiating such Allegations if they are truthful.',
			'TblNotes' => 'Subset data of Event Sequences. ',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '12',
			'TblNumFields' => '20',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 117,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inj',
			'TblName' => 'Injuries',
			'TblEng' => 'Injuries',
			'TblDesc' => 'Includes all instances of bodily harm sustained as a result of alleged Force initiated by Officers. Detailed Injury information is vital to substantiating such Allegations if they are truthful.',
			'TblNotes' => 'There can be multiple Injury records for each victim (Civilian).',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '18',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 119,
			'TblDatabase' => '1',
			'TblAbbr' => 'Evid',
			'TblName' => 'Evidence',
			'TblEng' => 'Evidence',
			'TblDesc' => 'Includes photos, videos, PDFs, and any multimedia documenting the police Incident itself or any Injuries resulting from an alleged use of excessive Force. Such evidence is vital for identifying Subjects of Allegations who might be good plaintiffs for a civil action or for sustaining a citizen Complaint.',
			'TblNotes' => 'Photographs/scans of warrants?',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '20',
			'TblNumFields' => '16',
			'TblNumForeignKeys' => '7',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 120,
			'TblDatabase' => '1',
			'TblAbbr' => 'Ord',
			'TblName' => 'Orders',
			'TblEng' => 'Orders',
			'TblDesc' => 'Includes all instances of requests and commands stated by Officers. This information is vital to evaluating the legal legitimacy of Officer actions and helps put Complaint events in chronological order.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '16',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 121,
			'TblDatabase' => '1',
			'TblAbbr' => 'Stop',
			'TblName' => 'Stops',
			'TblEng' => 'Stops',
			'TblDesc' => 'Includes all instances where Officers pull over a vehicle, detain a pedestrian, or otherwise question a Civilian at a residence. This table provides important information about Officers\' behavior and Stop practices within particular Departments.',
			'TblNotes' => 'Subset data of Event Sequences. This table could also be called Detentions, because both traffic stops and stop-and-frisk fall under the purview Terry v. Ohio. Provides link to article on topic.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '6',
			'TblNumFields' => '26',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 122,
			'TblDatabase' => '1',
			'TblAbbr' => 'Srch',
			'TblName' => 'Searches',
			'TblEng' => 'Searches',
			'TblDesc' => 'Includes all instances of vehicle searches, home, or other property searches. Detailed Search information is vital to evaluating the legitimacy of the search itself as well as identifying general Search practices within particular Departments.',
			'TblNotes' => 'Subset data of Event Sequences. Provides link to article on topic. 
If there is a Property record associated with a Search record, then property was searched.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '8',
			'TblNumFields' => '21',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 123,
			'TblDatabase' => '1',
			'TblAbbr' => 'Arst',
			'TblName' => 'Arrests',
			'TblEng' => 'Arrests',
			'TblDesc' => 'Includes all instances where individuals are placed under arrest. This table information helps provide richer detail about the nature of the Arrest and the individual burden of certain low-level discretionary or retaliatory Arrests.',
			'TblNotes' => 'Subset data of Event Sequences. We want to highlight all arrests that appear to be retaliatory in nature. Provides link to article on topic.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '11',
			'TblNumFields' => '12',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 125,
			'TblDatabase' => '1',
			'TblAbbr' => 'Priv',
			'TblName' => 'PrivilegeProfiles',
			'TblEng' => 'Privileges Profiles',
			'TblDesc' => 'Beyond default privileges for various types of system users, this table includes explicit privileges to enable access to specific system data. This is vital in allowing User IDs (which are associated with different user types) to be granted access to specific complaints or sets of complaints.',
			'TblType' => 'Linking',
			'TblGroup' => 'Internal Infrastructure',
			'TblOrd' => '45',
			'TblOpts' => '3',
			'TblActive' => '0',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 126,
			'TblDatabase' => '1',
			'TblAbbr' => 'AdmAct',
			'TblName' => 'AdminActions',
			'TblEng' => 'Administrator Actions',
			'TblDesc' => 'Includes administrator edits to all user data and incident reports. This information provides a complete history of data changes so any human, system, or security errors can be investigated and reversed if necessary.',
			'TblNotes' => '(*This is just how Morgan might implement this need, but the details of its implementation should not effect the core OPC data structures*)',
			'TblType' => 'Validation',
			'TblGroup' => 'Logging Data Tables',
			'TblOrd' => '48',
			'TblActive' => '0',
			'TblNumFields' => '6',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 128,
			'TblDatabase' => '1',
			'TblAbbr' => 'Surv',
			'TblName' => 'Surveys',
			'TblEng' => 'Surveys',
			'TblDesc' => 'Includes feedback after the entire process has been completed. This is primarily provided by Complainants, but may also be expanded to other types of system Users. This is vital for continuing to improve the quality of the system, both in general and in specific detail.',
			'TblNotes' => 'Maybe even feedback from Subjects and/or Officers, in addition to established User types? 

Question list and fields coming soon...',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '22',
			'TblActive' => '0',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 130,
			'TblDatabase' => '1',
			'TblAbbr' => 'User',
			'TblName' => 'Users',
			'TblEng' => 'User Authentication',
			'TblDesc' => 'Includes standardized login information and records for all types of system participants. This is important to maintain consistent security procedures for Administrators, Customers, Oversight Agencies, and Civilians.',
			'TblGroup' => 'Internal Infrastructure',
			'TblOrd' => '44',
			'TblActive' => '0',
			'TblNumFields' => '4',
			'TblNumForeignIn' => '8'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 136,
			'TblDatabase' => '1',
			'TblAbbr' => 'Note',
			'TblName' => 'ComplaintNotes',
			'TblEng' => 'Complaint Notes',
			'TblDesc' => 'Information which must be appended to Complaints any time after they are submitted. This is important for recording updates from system Administrators or even allowing Complainants to potentially upload evidence obtained after initially submitting their report.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '23',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '2',
			'TblNumForeignIn' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 137,
			'TblDatabase' => '1',
			'TblAbbr' => 'Eve',
			'TblName' => 'EventSequence',
			'TblEng' => 'Event Sequence',
			'TblDesc' => 'Represent key discrete events occurring during a police Incident which require details like Stops, Searches, uses of Force, and Arrests. Event Sequence information is vital for identifying the chronological order of these events. This table also acts as a common reference to associate Orders, Evidence, and People-Event Links with all four of these types of events.',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '5',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '1',
			'TblNumForeignIn' => '9'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 138,
			'TblDatabase' => '1',
			'TblAbbr' => 'Chrg',
			'TblName' => 'Charges',
			'TblEng' => 'Charges',
			'TblDesc' => 'Includes all instances where individuals are charged without being arrested. This table information helps provide richer detail, especially about the use of excessive/unnecessary citations.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '17',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 143,
			'TblDatabase' => '1',
			'TblAbbr' => 'EviTim',
			'TblName' => 'EvidenceTime',
			'TblEng' => 'Evidence Timestamps',
			'TblDesc' => 'Includes timecodes referring to moments in video Evidence, which are associated with specific Allegations in this Complaint.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '21',
			'TblNumFields' => '4',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 144,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkComDept',
			'TblName' => 'LinksComplaintDept',
			'TblEng' => 'Complaint-Department Links',
			'TblDesc' => 'Includes linkages between Police Departments and Complaints. This allows a single Complaint to be associated with more than one Police Department.',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '34',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 145,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkComOver',
			'TblName' => 'LinksComplaintOversight',
			'TblEng' => 'Complaint-Oversight Links',
			'TblDesc' => 'Includes linkages between Oversight Agencies involved in a Complaint. This allows us to track the progress of Complaints being investigated by more than one Oversight Agency.',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '35',
			'TblOpts' => '3',
			'TblNumFields' => '9',
			'TblNumForeignKeys' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 146,
			'TblDatabase' => '1',
			'TblAbbr' => 'InjCare',
			'TblName' => 'InjuryCare',
			'TblEng' => 'Injury Care',
			'TblDesc' => 'Information from medical institutions who treated a Civilian\'s Injuries. Important for investigating use of Force Allegations.',
			'TblNotes' => 'There can be only one Injury Care record for each victim (Civilian), but this record should only exist if the victim did have Injuries.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '19',
			'TblNumFields' => '16',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 147,
			'TblDatabase' => '1',
			'TblAbbr' => 'StopReas',
			'TblName' => 'StopReasons',
			'TblEng' => 'Stop Reasons',
			'TblDesc' => 'The table stores the stated or non-stated Officer explanations to Civilians for a Stop or detention. This table is important for associating multiple Stop Reasons given for a single Stop.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '7',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 148,
			'TblDatabase' => '1',
			'TblAbbr' => 'ForceSub',
			'TblName' => 'ForceSubType',
			'TblEng' => 'Force Sub-Type',
			'TblDesc' => 'This subset table stores secondary types of Use of Force. This table specifically includes greater detail for Use of Force records that include any of these types of force: 1) Control Hold, 2) Body Weapon, and 3) Takedown. This data is important for linking multiple force type details with a single Use of Force.',
			'TblNotes' => 'Many-to-1 relationship with Use of Force',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '13',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 149,
			'TblDatabase' => '1',
			'TblAbbr' => 'Body',
			'TblName' => 'BodyParts',
			'TblEng' => 'Body Parts',
			'TblDesc' => 'This subset table stores which areas of a Civilian\'s body were impacted by Force or Injury. This is important for providing investigators documentation regarding Civilian\'s Injuries.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '15',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 150,
			'TblDatabase' => '1',
			'TblAbbr' => 'SrchCon',
			'TblName' => 'SearchContra',
			'TblEng' => 'Search Contraband',
			'TblDesc' => 'This table stores types of illegal items that were seized during a Search. Important for associating multiple types of contraband items with a single Search.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '9',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 151,
			'TblDatabase' => '1',
			'TblAbbr' => 'SrchSeiz',
			'TblName' => 'SearchSeize',
			'TblEng' => 'Search Seizures',
			'TblDesc' => 'This table stores types of legal property that were seized during a Search. Important for associating multiple types of seized items with a single Search.',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '10',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 152,
			'TblDatabase' => '1',
			'TblAbbr' => 'Vehic',
			'TblName' => 'Vehicles',
			'TblEng' => 'Vehicles',
			'TblDesc' => 'This table includes identifying information about Civilian and Officer vehicles. This data helps investigators locate or verify the identities of Officers and Civilians involved in an Incident.',
			'TblType' => 'Subset',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '29',
			'TblNumFields' => '7',
			'TblNumForeignIn' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 153,
			'TblDatabase' => '1',
			'TblAbbr' => 'Phys',
			'TblName' => 'PhysicalDesc',
			'TblEng' => 'Physical Descriptions',
			'TblDesc' => 'This table includes subjective characteristics of Civilians and Officers as described by Complainants. This information is vital for for verifying the identity of Civilians and Officers connected to Complaints.',
			'TblNotes' => 'For example, the Person Contact table has a "date of birth field" while the Physical Descriptions table has an "age range" field.',
			'TblType' => 'Subset',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '27',
			'TblNumFields' => '12',
			'TblNumForeignIn' => '3'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 154,
			'TblDatabase' => '1',
			'TblAbbr' => 'Prsn',
			'TblName' => 'PersonContact',
			'TblEng' => 'Person Contact Info',
			'TblDesc' => 'This is the name and contact info for Civilians, Officers, and other system Users. This information is vital for keeping in touch with all the key people connected to the police oversight process.',
			'TblType' => 'Subset',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '26',
			'TblNumFields' => '17',
			'TblNumForeignIn' => '4'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 155,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkOffVehic',
			'TblName' => 'LinksOfficerVehicles',
			'TblEng' => 'Officer-Vehicle Links',
			'TblDesc' => 'This table includes linkages between vehicles and people. This allows a single vehicle to be associated with one or more Officer.',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '39',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 156,
			'TblDatabase' => '1',
			'TblAbbr' => 'AlleSil',
			'TblName' => 'AllegSilver',
			'TblEng' => 'Silver Allegations',
			'TblDesc' => 'Tracks the yes/no responses to Silver-Level Allegations against Officers, vital to identifying the most serious Complaints. This information also helps OPC provide useful next-steps advice for Complainants who generate Complaints.',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '3',
			'TblNumFields' => '26',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 157,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkCivAlle',
			'TblName' => 'LinksCivilianAllegations',
			'TblEng' => 'Civilian-Allegation Links',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '40',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 158,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkOffAlle',
			'TblName' => 'LinksOfficerAllegations',
			'TblEng' => 'Officer-Allegation Links',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '36',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 159,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkOffOrd',
			'TblName' => 'LinksOfficerOrders',
			'TblEng' => 'Officer-Order Links',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '38',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 160,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkOffEve',
			'TblName' => 'LinksOfficerEvents',
			'TblEng' => 'Officer-Event Links',
			'TblDesc' => 'Includes linkages between Officers involved in an Incident with key events that happened during an Incident. Each record links one Officer with one Event (a Stop, Search, Property, or Use of Force).',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '37',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 161,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkCivOrd',
			'TblName' => 'LinksCivilianOrders',
			'TblEng' => 'Civilian-Order Links',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '42',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 162,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkCivEve',
			'TblName' => 'LinksCivilianEvents',
			'TblEng' => 'Civilian-Event Links',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '41',
			'TblOpts' => '3',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 163,
			'TblDatabase' => '1',
			'TblAbbr' => 'LnkCivVehic',
			'TblName' => 'LinksCivilianVehicles',
			'TblEng' => 'Civilian-Vehicle Links',
			'TblDesc' => 'This table includes linkages between vehicles and people. This allows a single vehicle to be associated with one or more Civilian.',
			'TblType' => 'Linking',
			'TblGroup' => 'Complaint Linkage Tables',
			'TblOrd' => '43',
			'TblNumFields' => '3',
			'TblNumForeignKeys' => '2'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 164,
			'TblDatabase' => '1',
			'TblAbbr' => 'PhysRace',
			'TblName' => 'PhysicalDescRace',
			'TblEng' => 'Physical Descriptions Race',
			'TblDesc' => 'This subset table stores races associated with the Physical Descriptions of Civilians and Officers. This table specifically provides the important ability to accurately store data for people with multiple races.',
			'TblNotes' => 'The U.S. Census in 2000 and 2010 has been tracking multiple races for each citizen.',
			'TblType' => 'Subset',
			'TblGroup' => 'People Involved In Complaint',
			'TblOrd' => '28',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 165,
			'TblDatabase' => '1',
			'TblAbbr' => 'ForceCiv',
			'TblName' => 'ForceCivBody',
			'TblEng' => 'Force Civilian Body Weapons',
			'TblDesc' => 'This subset table stores one or more body weapons used by a Civilian against an Officer, during a specific Use of Force.',
			'TblNotes' => 'Many-to-1 relationship with Use of Force',
			'TblType' => 'Subset',
			'TblGroup' => 'Complaint Data Tables',
			'TblOrd' => '14',
			'TblNumFields' => '2',
			'TblNumForeignKeys' => '1'
		]);
		
		DB::table('SL_Fields')->insert([
			'FldID' => 190,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'Indicates the unique User ID number of the User owning the data stored in this record for this Experience.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 191,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Experience Node Progress',
			'FldDesc' => 'Indicates the unique Node ID number of the last Experience Node loaded during this User\'s Experience.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldCharSupport' => ',Numbers,',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 192,
			'FldDatabase' => '1',
			'FldTable' => '29',
			'FldName' => 'VersionAB',
			'FldEng' => 'A/B Testing Version',
			'FldDesc' => 'Stores a complex string reflecting all A/B Testing variations in effect at the time of this User\'s Experience of this Node.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '11',
			'FldForeignMax' => '11',
			'FldForeign2Min' => '11',
			'FldForeign2Max' => '11',
			'FldOpts' => '39'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 200,
			'FldDatabase' => '1',
			'FldTable' => '108',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Bio',
			'FldEng' => 'Bio',
			'FldDesc' => 'A brief narrative profile drafted by OPC Administrators. This helps us identify and keep track of Administrator\'s skills and qualifications related to the work.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 208,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '923',
			'FldName' => 'CompanyName',
			'FldEng' => 'Company Name',
			'FldDesc' => 'The full name of the business or or organization a Customer represents. This is an integral component of a Customer\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 209,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '924',
			'FldName' => 'CompanyWebsite',
			'FldEng' => 'Website',
			'FldDesc' => 'The home page of a Customer\'s business or organization. Might include important updated information about Customers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 210,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '922',
			'FldName' => 'Title',
			'FldEng' => 'Title',
			'FldDesc' => 'The job position of a Customer within an organization. We might use this in formal communications with Customers or regarding Customers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 217,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '29',
			'FldSpecSource' => '0',
			'FldName' => 'SubmitDeadline',
			'FldEng' => 'Days Until Submission Deadline',
			'FldDesc' => 'Indicates that there is a policy stipulating a maximum number of days between when the Incident occurred and when a Complaint must be submitted [or received?] by an Oversight Agency in order for it to be properly investigated. This information might help OPC Administrators prioritize the review of new complaints. For Departments without a time limit for submitting Complaints, this field is stored as -1.',
			'FldNotes' => 'This is used to calculate deadlines for each Complaint in the Administrator tools.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 222,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '29',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '0',
			'FldName' => 'AttID',
			'FldEng' => 'Attorney ID',
			'FldDesc' => 'The unique number of the Customer record related to this Complaint. This is important for identifying the Attorney who has taken this case.',
			'FldForeignTable' => '110',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 223,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Submitted',
			'FldEng' => 'Submitted to Oversight Agency',
			'FldDesc' => 'Indicates date and time when an electronic Complaint was sent to an appropriate Oversight Agency. This is an essential for tracking an Oversight Agency\'s response -- or non-response -- rates to OPC-submitted Complaints.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NULL',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 224,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Received',
			'FldEng' => 'Received by Oversight Agency',
			'FldDesc' => 'Indicates date and time when an electronic Complaint was received by an appropriate Oversight Agency. This is essential for tracking an Oversight Agency\'s  response time when acknowledging receipt of OPC-submitted Complaints.',
			'FldNotes' => 'We don\'t yet know how many departments will opt to electronically indicate that they\'ve received OPC complaints. In fact, many will likely skip this process and directly contact Complainants.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NULL',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 225,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '925',
			'FldName' => 'OverID',
			'FldEng' => 'Oversight ID',
			'FldDesc' => 'The unique number of the Oversight Agency record involved with this Complaint. This number helps track the investigative progress of any Oversight Agencies who have jurisdiction over this Complaint.',
			'FldForeignTable' => '106',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 230,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '26',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerDisciplined',
			'FldEng' => 'Officer Disciplined',
			'FldDesc' => 'Indicates whether or not any Subject Officers associated with a Complaint have received any formal punishment for their actions. Important for for statistical purposes and for bringing sense of justice and closure to Civilians.',
			'FldNotes' => 'The likelihood of an individual complaint allegation being sustained is very low. However, the likelihood of obtaining officer discipline data relating to a specific sustained complaint is extremely remote.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 231,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '27',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerDisciplineType',
			'FldEng' => 'Officer Discipline Type',
			'FldDesc' => 'Indicates the category of formal punishment any Subject Officers associated with a Complaint have received. Important for statistical purposes and for bringing sense of justice and closure to Civilians.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Officer Discipline Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 232,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '28',
			'FldSpecSource' => '0',
			'FldName' => 'MediaLinks',
			'FldEng' => 'Media Links',
			'FldDesc' => 'The URL address of a news report containing information related to this Complaint. Important for tracking and verifying new information related to a Complaint\'s Allegations.',
			'FldNotes' => 'Proper news story selection criteria here: http://www.policemisconduct.net/about/news-feed-faq/

Must be careful not to let people post links to their personal blogs, because that won\'t include objective information.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 234,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'AgencyComplaintNumber',
			'FldEng' => 'Agency Complaint Number',
			'FldDesc' => 'A unique number used to identify Complaints. It is assigned by the Oversight Agency investigating an OPC-generated Complaint.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 240,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '841',
			'FldName' => 'Address',
			'FldEng' => 'Street Address',
			'FldDesc' => 'The first line of the postal location at or near where an Incident occurred. This is an integral component of a complete Incident location address.',
			'FldNotes' => 'Could we indicate highway mile markers or exits in the address field -- or should that be part of a separate field? Incident address locations should only include locations within the 50 U.S. states and the District of Columbia.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 245,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '938',
			'FldName' => 'TimeStart',
			'FldEng' => 'Start Time',
			'FldDesc' => 'The date, hour, and minute when a single Incident begins. This information is vital for verifying an Incident or merging Incident data from other sources.',
			'FldNotes' => 'Morgan: We might need a Business rule indicating that the Incident "Start Time" and "End Time" can\'t be more than 24 hours apart. Specifically, we don\'t want Complainants reporting allegations from multiple Incidents lumping them into a months or years-long Incident timeframe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldRequired' => '1',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 246,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '939',
			'FldName' => 'TimeEnd',
			'FldEng' => 'End Time',
			'FldDesc' => 'The date, hour, and minute when a single Incident ends. This information is vital for verifying an Incident occurrence or merging Incident data from other sources.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 247,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '940',
			'FldName' => 'Duration',
			'FldEng' => 'Duration',
			'FldDesc' => 'The total calculated minutes of of a single Incident.  This information is vital for verifying an Incident occurrence or merging Incident data from other sources.',
			'FldNotes' => 'calculated based on Incident Start Time and Incident End Time.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '5',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 249,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Scene Type',
			'FldDesc' => 'Category of possible settings where an Incident occurred. This selection provides important contextual information about the location of the Incident, which helps us better evaluate the Incident and Allegations.',
			'FldNotes' => 'Which of the following best describes the scene of the incident? If the incident includes multiple locations, pick the one where you first witnessed police contact.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Scene Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 250,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Description',
			'FldDesc' => 'Narrative details about the setting where an Incident occurred. Beyond mere time and location, scene information adds an important contextual backdrop behind specific Incident events.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 252,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '13',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '944',
			'FldName' => 'SceneID',
			'FldEng' => 'Scene ID',
			'FldDesc' => 'The unique number of the Scene record related to this Evidence record. This is important in the cases when this piece of Evidence is used in documenting the Scene description. ',
			'FldForeignTable' => '115',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 253,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Evidence Type',
			'FldDesc' => 'Category of Evidence attached to Complaint. This makes it easier for us to identity, organize, and properly store Evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Evidence Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 256,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Which Types of Force did this officer use?',
			'FldDesc' => 'The categories of Force an Officer used on a Subject. Essential for evaluating Allegations of excessive force and for tracking Force trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Force Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 257,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TypeOther',
			'FldEng' => 'Other Type of Force',
			'FldDesc' => 'Category of Force an Officer used on Subject. Important for identifying less-common Force types.',
			'FldNotes' => 'Only visible if "Other" selected under "Which Types of Force did this officer used?"',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 258,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'HowManyTimes',
			'FldEng' => 'How many times was Subject struck with this type of force?',
			'FldDesc' => 'Indicates the number of times an Officer hit a Subject with this type of Force. Important for investigating Allegations of Force and for identifying Force trends.',
			'FldNotes' => 'We might not want to reveal this for certain types of force -- such takedowns and control holds. Because those are likely to only be deployed once.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 260,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'OrdersBeforeForce',
			'FldEng' => 'Did this officer issue orders before use of force?',
			'FldDesc' => 'Indicates whether or not an Officer issued orders before using Force against a Subject. Important for investigating Excessive Force Allegations of Excessive Force.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 262,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'OrdersSubjectResponse',
			'FldEng' => 'What did the victim say or do before use of force?',
			'FldDesc' => 'Narrative account of what the Subject of an Excessive Force Allegation said or did before Officer used Force. Important for investigating Excessive Force Allegations and for identifying Force trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 263,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'WhileHandcuffed',
			'FldEng' => 'Victim handcuffed when struck?',
			'FldDesc' => 'Indicates whether or not Subject was handcuffed when struck by an Officer. Important for evaluating Allegations of Excessive Force and tracking Force trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 264,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'WhileHeldDown',
			'FldEng' => 'Victim held down when struck?',
			'FldDesc' => 'Indicates whether or not Subject was restrained on the ground when struck by an Officer. Important for evaluating Allegations of Excessive Force and tracking Force trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 266,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '15',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '945',
			'FldName' => 'InjuryID',
			'FldEng' => 'Injury ID',
			'FldDesc' => 'The unique number of the Injury record related to this Evidence record. This is important when this piece of Evidence documents a Civilian\'s Injuries.',
			'FldForeignTable' => '117',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 269,
			'FldDatabase' => '1',
			'FldTable' => '117',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'HowManyTimes',
			'FldEng' => 'How many Injuries',
			'FldDesc' => 'A number to indicate how many Injuries a particular Civilian received during an use of Force Incident. Important for quantifying the number of discrete Injuries received from Force.',
			'FldNotes' => 'We have decided this might not be necessary 10/17/15======This field hidden for Injury Types (these types count by Injury Locations): In-patient hospital stay required, Blood loss requiring transfusion, Major concussion, Longer than brief loss of consciousness, Minor concussion, Brief loss of consciousness, ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 271,
			'FldDatabase' => '1',
			'FldTable' => '117',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Injury Type',
			'FldDesc' => 'Category of Injury on a Civilian\'s body resulting from use of Force. Important for evaluating Allegations of excessive Force.',
			'FldNotes' => 'SJ IPA has twenty injury options broken into six categories -- including "none," "pre-existing," and "unknown."',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Injury Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 272,
			'FldDatabase' => '1',
			'FldTable' => '117',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Injury Description',
			'FldDesc' => 'Additional narrative information about a specific Injury. Important for evaluating Allegations of excessive Force.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 273,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'ResultInDeath',
			'FldEng' => 'Result in Death?',
			'FldDesc' => 'Indicates that an Injury resulted in death to the Civilian. Important for identifying police killings.',
			'FldNotes' => 'This might be redundant if we have a "Fatal injuries" selection under "Injury Type." However, I feel like this might be an important stand-alone question. 
Implementation Note: This should NOT be asked if the Complainant indicates that they are the Civilian linked to this particular Injury -- because that would be damn near impossible.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 274,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TimeOfDeath',
			'FldEng' => 'Date & Time of Death',
			'FldDesc' => 'Indicates the official time of death of a Civilian resulting from a Force Injury. Important for statistical purposes.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 275,
			'FldDatabase' => '1',
			'FldTable' => '117',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectID',
			'FldEng' => 'Subject of Injury',
			'FldDesc' => 'Indicates which Subject\'s Injuries are described by this record.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 276,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'HospitalTreated',
			'FldEng' => 'Hospital Where Treated',
			'FldDesc' => 'The name of the hospital where the Civilian who received Injuries was initially treated. Important for verifying Injury information.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 277,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'DoctorNameFirst',
			'FldEng' => 'Doctor First Name',
			'FldDesc' => 'The legal given name of a doctor who treated an Injury. Important for identifying doctors who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 279,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'DoctorNameLast',
			'FldEng' => 'Doctor Last Name',
			'FldDesc' => 'The legal surname of a doctor who treated an Injury. Important for identifying doctors who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 280,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'DoctorEmail',
			'FldEng' => 'Doctor Email',
			'FldDesc' => 'The valid email address of a doctor who treated an Injury. Important for communicating with doctors who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 281,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'DoctorPhone',
			'FldEng' => 'Doctor Phone',
			'FldDesc' => 'The contact number of a doctor who treated an Injury. Important for communicating with doctors who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 282,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyOnScene',
			'FldEng' => 'Emergency Staff on Scene?',
			'FldDesc' => 'Indicates whether or not emergency medical staff were present at the Scene where any Injuries were received. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 283,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyNameFirst',
			'FldEng' => 'Emergency Staff First Name',
			'FldDesc' => 'The legal given name of an emergency medical services staffer present at the Scene where any Injuries were received. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 285,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyNameLast',
			'FldEng' => 'Emergency Staff Last Name',
			'FldDesc' => 'The legal surname of an emergency medical services staffer present at the Scene where any Injuries were received. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 286,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyIDnumber',
			'FldEng' => 'Emergency Staff ID Number',
			'FldDesc' => 'A unique number assigned to the emergency medical services staffer by their department. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 287,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyVehicleNumber',
			'FldEng' => 'Emergency Staff Vehicle Number',
			'FldDesc' => 'A unique number assigned to an emergency medical services vehicle. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 288,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyLicenceNumber',
			'FldEng' => 'Emergency Staff Licence Number',
			'FldDesc' => 'The license plate number of an emergency medical services vehicle. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 289,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'EmergencyDeptName',
			'FldEng' => 'Emergency Staff Department Name',
			'FldDesc' => 'The official name of the emergency medical services department. Important for identifying emergency medical personnel who treated Injuries.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 291,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '0',
			'FldName' => 'CivilianID',
			'FldEng' => 'Civilian is Source?',
			'FldDesc' => 'The unique number of the Civilian record related to this Evidence record. This indicates a Civilian is the source of the Evidence. This linkage is important if they need to be contacted for validation or other followup.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 293,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '920',
			'FldName' => 'DeptID',
			'FldEng' => 'Department is Source',
			'FldDesc' => 'The unique number of the Department record related to this Evidence record. This indicates that a Department is the source of the Evidence. This linkage is important if the Department needs to be contacted for validation or other followup.',
			'FldForeignTable' => '111',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 294,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Seized',
			'FldEng' => 'Property Seized?',
			'FldDesc' => 'Indicates that Officers took property from a Subject. Important for evaluating seizure Allegations and forfeiture trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 296,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'SeizedDesc',
			'FldEng' => 'Seized Description',
			'FldDesc' => 'Additional narrative information about the specific Property items that were seized. Important for evaluating Property seizure Allegations.',
			'FldNotes' => 'Describe the specific items seized. For example, if cash seized, please specify the dollar amount.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 298,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'Damage',
			'FldEng' => 'Property Damage?',
			'FldDesc' => 'Indicates that Officers damaged or destroyed Subject\'s Property. Important for evaluating Property damage claims.',
			'FldNotes' => 'IF Yes, then Evidence can be optionally uploaded.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 300,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'DamageDesc',
			'FldEng' => 'Damage Description',
			'FldDesc' => 'Additional information about the nature of the damaged or destroyed Property. Important for evaluating Property damage claims.',
			'FldNotes' => 'Describe the specific items damaged and the nature of the damage. Please include dollar amounts for repairing or replacing damaged items.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 302,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'DateTime',
			'FldEng' => 'Date & Time of Evidence',
			'FldDesc' => 'Indicates the time and date when a piece of Evidence was attached to a Complaint. Important for keeping track of new Evidence that wasn\'t available during initial Complaint submission.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATE',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 303,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Evidence Title',
			'FldDesc' => 'A general name defining what the Evidence is. This makes it easier for us to identity and organize Evidence.',
			'FldNotes' => 'Admins should be able to edit bad titles.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 304,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'EvidenceDesc',
			'FldEng' => 'Evidence Description',
			'FldDesc' => 'A brief narrative explaining why this Evidence is important. This makes it easier for us to identity and organize Evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 305,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'UploadFile',
			'FldEng' => 'Uploaded File Name',
			'FldDesc' => 'The name of the file uploaded to Evidence. Allows users to recognized specific files they\'ve successfully uploaded.',
			'FldNotes' => 'We can store these files however we want, even if it changed the file name.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 306,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'VideoLink',
			'FldEng' => 'Video Link',
			'FldDesc' => 'The URL where the externally-hosted video is stored. Important for identifying and sharing important video Evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 307,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'VideoDuration',
			'FldEng' => 'Video Duration',
			'FldDesc' => 'The length of the video Evidence in seconds. Important for organizing and evaluating video Evidence.',
			'FldNotes' => 'Implementation Note: This information should be able to be automatically generated by the Video link.

',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 311,
			'FldDatabase' => '1',
			'FldTable' => '120',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TroubleUnderstading',
			'FldEng' => 'Why Subject Trouble Understanding Order?',
			'FldDesc' => 'Indicates whether or not a Subject had difficulty hearing or understanding an Officer\'s order. Important for evaluating Force Allegations.',
			'FldNotes' => 'Only for Use of Force Orders. If users indicate that there was trouble hearing order, should we show this field asking Why [victim] had trouble understanding order?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 312,
			'FldDatabase' => '1',
			'FldTable' => '120',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Order Description',
			'FldDesc' => 'Narrative account of an Officer\'s Order. Important for evaluating certain Allegations.',
			'FldNotes' => 'As best you can recall, what were the exact words and tone the Officers used when making this order?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 314,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'StatedReasonDesc',
			'FldEng' => 'Stated Stop Reason Description',
			'FldDesc' => 'Narrative description of the Officer\'s stated reason for stopping any Civilians related to this Stop. Might provide additional information for evaluating any Allegations related to this Stop.',
			'FldNotes' => 'As best you can remember, what were the exact words this Officer used to explain why you were stopped? ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 315,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectAskedToLeave',
			'FldEng' => 'Subject(s) Asked to Leave?',
			'FldDesc' => 'Indicates whether or not this Subject asked the Officer if he/she was free to go during the Stop. Doing this indicates that a Stop is no longer voluntary. This is important information for evaluating certain Allegations related to this stop.',
			'FldNotes' => 'http://www.flexyourrights.org/faqs/how-long-can-police-detain-you/',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 316,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectStatementsDesc',
			'FldEng' => 'Subject Statements Description',
			'FldDesc' => 'Narrative account of what Subject said to the Officer during the Stop. This is important for evaluating any Allegations related to this Stop.',
			'FldNotes' => 'As best you can remember, what were the exact words this Subject said to this Officer? ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 317,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'RefuseID',
			'FldEng' => 'Did you refuse to provide ID?',
			'FldDesc' => 'Indicates whether or not a Civilian refused to provide ID to an Officer. Important for identifying patterns of excessive ID requests and retaliatory policing. ',
			'FldNotes' => 'http://www.flexyourrights.org/faqs/when-can-police-ask-for-id/',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldNullSupport' => '0'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 318,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectHandcuffed',
			'FldEng' => 'Subject Handcuffed?',
			'FldDesc' => 'Indicates whether or not this Subject was handcuffed by an Officer during this Stop. Important information for identifying Department patterns of excessive handcuffing during Stops.',
			'FldNotes' => 'San Jose IPA is trying to limit this common practice.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 319,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectFrisk',
			'FldEng' => 'Subject Frisk?',
			'FldDesc' => 'Indicates whether or not this Subject was patted down by an Officer during this Stop. This is important information for evaluating certain Allegations related to this stop. Also important for identifying patterns of excessive pat downs.',
			'FldNotes' => 'Related Article
http://www.flexyourrights.org/faqs/what-is-reasonable-suspicion/

There was at one point a copy of this field in Searches. We deleted it because frisks are not technically searches and are generally legally permissible as part of a Stop.



Q. Do we want mere frisks to trigger wrongful search Allegations? Because frisks alone are almost always legally permissible, this might be Allegation overkill.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 320,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '20',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '938',
			'FldName' => 'TimeStart',
			'FldEng' => 'Start Time',
			'FldDesc' => 'The date, hour, and minute when a single Stop begins. This information is vital for verifying a Stop occurrence and evaluating its legal legitimacy.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 321,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '21',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '939',
			'FldName' => 'TimeEnd',
			'FldEng' => 'End Time',
			'FldDesc' => 'The date, hour, and minute when a single Stop ends. This information is vital for verifying a Stop occurrence and evaluating its legal legitimacy.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 322,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '22',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '940',
			'FldName' => 'Duration',
			'FldEng' => 'Duration',
			'FldDesc' => 'The total calculated minutes of of a single Stop. This information is vital for verifying a Stop occurrence and evaluating its legal legitimacy.',
			'FldNotes' => 'Calculated based on Stop Start Time and Stop End Time. Instead of capturing this information within the Stop, this is found in the duration of the Incident for Complaints with a Stop but no Arrest.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '5',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 325,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'StatedReason',
			'FldEng' => 'Officer stated reason for search?',
			'FldDesc' => 'Indicates whether or not the Officer gave a reason for this Search. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 326,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'StatedReasonDesc',
			'FldEng' => 'Stated reason description',
			'FldDesc' => 'The specific reason the Officer gave for conducting this Search. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldNotes' => 'As best you can remember, what were the exact words this Officer said before conducting this search?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 327,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerRequest',
			'FldEng' => 'Officer request permission to search?',
			'FldDesc' => 'Indicates whether or not the Officer asked the Subject for permission to Search their person or property. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 328,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerRequestDesc',
			'FldEng' => 'Officer request description',
			'FldDesc' => 'The specific words and tone the Officer used to solicit consent to search. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldNotes' => 'What were the exact words and tone this Officer used to request consent to search? (Search requests often sound a lot like commands.)',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 329,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectConsent',
			'FldEng' => 'Did subject consent to search?',
			'FldDesc' => 'Indicates whether or not the Subject gave the Officer permission to Search their person or property. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 330,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectSay',
			'FldEng' => 'What did subject say?',
			'FldDesc' => 'Narrative account of specific words a Subject used to consent to the search. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldNotes' => 'What were the exact words and tone [the Subject] used to give consent to the Officer?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 331,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerThreats',
			'FldEng' => 'Officer make threats or lie to get consent to search?',
			'FldDesc' => 'Indicates whether or not an Officer made any stated or implied threats to the Subject to obtain consent to search Subject\'s person or property. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 332,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerThreatsDesc',
			'FldEng' => 'Officer threat description',
			'FldDesc' => 'The specific words the Officer used to trick Subject into consenting to Search. Important for evaluating possible wrongful search Allegation and identifying Search trends.',
			'FldNotes' => 'What were the exact words this Officer used to threaten or trick the Subject into giving consent to search?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 333,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'K9sniff',
			'FldEng' => 'K-9 sniff?',
			'FldDesc' => 'Indicates whether or not an Officer had a canine sniff a Subject or their property. Important for identifying possible wrongful search Allegation and identifying canine search trends.',
			'FldNotes' => 'Q. Do we want mere K-9 sniffs to trigger wrongful search Allegations? Because K9 sniffs alone are almost always legally permissible, this might be Allegation overkill.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 335,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'Strip',
			'FldEng' => 'Strip Searched?',
			'FldDesc' => 'Indicates whether or not an Officer performed a strip search on a Subject. Important for evaluating possible wrongful search Allegation and identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 341,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'ContrabandDiscovered',
			'FldEng' => 'Contraband discovered?',
			'FldDesc' => 'Indicates whether or not illegal items were discovered during a Search. Important for identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 343,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerWarrant',
			'FldEng' => 'Officer have warrant?',
			'FldDesc' => 'Indicates whether or not an Officer had a warrant for a Search. Important for evaluating possible wrongful search Allegations and for identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 344,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerWarrantSay',
			'FldEng' => 'What did warrant say?',
			'FldDesc' => 'The words on the official warrant. Important for evaluating possible wrongful search Allegations.',
			'FldNotes' => 'User may type actual words on the warrant. Or they may upload a photograph or scan of the warrant as Evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 348,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'StatedReason',
			'FldEng' => 'Officer state reason for arrest?',
			'FldDesc' => 'Indicates whether or not an Officer stated a reason for Arresting a Civilian. Important for evaluating wrongful arrest Allegations.',
			'FldNotes' => 'Did [the officer] verbally state a reason why he arrested [this Subject]?  ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 349,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'StatedReasonDesc',
			'FldEng' => 'Stated reason for arrest',
			'FldDesc' => 'The specific reason an Officer gave for making an arrest. Important for evaluating wrongful arrest Allegations.',
			'FldNotes' => 'Before the arrest happened, what specific reasons did [the officer] give for arresting [this Subject]?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 352,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'SITA',
			'FldEng' => 'Was this a Search Incident To Arrest? (Admin)',
			'FldDesc' => 'Indicates whether or not Administrators determine that an Officer searched a Subject after an Arrest. Important for tracking searches incident to arrest. ',
			'FldNotes' => 'Commonly known as Search Incident To Arrest (SITA) or the Chimel rule, is a legal principle that allows police to perform a warrantless search of an arrested person, and the area within the arrestee--s immediate control, in the interest of officer safety, the prevention of escape, and the destruction of evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 357,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'ChargesOther',
			'FldEng' => 'Arrest Charges Other (not in list)',
			'FldDesc' => 'Formal Arrest charges received. Important for tracking arrest trends and for evaluating wrongful arrest Allegations. ',
			'FldNotes' => 'Only reveal if user selects "Other" category under "Arrest Charges."

Please write what you were charged with. ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 369,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'NoChargesFiled',
			'FldEng' => 'Were all the charges dropped before they were released?',
			'FldDesc' => 'Indicates that Subject was placed under Arrest, but no official charges were filed. Important for identifying and evaluating wrongful arrest Allegations.',
			'FldNotes' => 'Check with Attorney for precise terminology and common usage.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 370,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '927',
			'FldName' => 'IncidentID',
			'FldEng' => 'Incident ID',
			'FldDesc' => 'The unique number of the Incident record related to this Complaint. This number helps us identify the Incident that this complaint documents. It might also help us associate additional Complaints with the same Incident.',
			'FldNotes' => 'More than one Complaint record can be associated with a single Incident record.',
			'FldForeignTable' => '114',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 371,
			'FldDatabase' => '1',
			'FldTable' => '113',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Allegation, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 373,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Civilian\'s record. Vital for associating this Civilian with other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 375,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Incident, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeign2Max' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 376,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Scene, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 380,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Evidence record, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 386,
			'FldDatabase' => '1',
			'FldTable' => '113',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Allegation Type',
			'FldDesc' => 'The specific misconduct accusations cited by Complainants against one or more Officers related to a single Incident. Essential for statistical purposes and for prioritizing new Complaints. ',
			'FldNotes' => 'Asked at the end during Phase 4: Policy or Procedure, Courtesy, Intimidating Display Of Weapon, Sexual Assault, Conduct Unbecoming an Officer (Neglect of Duty is part of Policy/Procedure)',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Allegation Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldNullSupport' => '0',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 387,
			'FldDatabase' => '1',
			'FldTable' => '113',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Findings',
			'FldEng' => 'Allegation Findings',
			'FldDesc' => 'The official final disposition of an Allegation. Important for tracking responsiveness of Police Departments, Oversight Agencies, and Complainants.',
			'FldNotes' => 'Final Allegation status is categorized by Admins after reviewing official department documentation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Allegation Findings',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 393,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Privacy',
			'FldEng' => 'Privacy',
			'FldDesc' => 'User-selected category for Complaint records. This defines what personally identifiable information (PII) is publicly shared.',
			'FldNotes' => 'Should we move privacy settings at the end of the Complaint process for now (in the Simulation/Implementation)? (We can later test whether users prefer this selection to appear earlier or later in the process.)

Wikipedia Article on the topic: https://en.wikipedia.org/wiki/Personally_identifiable_information',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Privacy Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 396,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldSpecSource' => '0',
			'FldName' => 'IsVerified',
			'FldEng' => 'Is Verified Officer Record?',
			'FldDesc' => 'This marks the verified record of an Verified Officer Record with the most accurate and current information. This is vital for tracking Officers involved in multiple Incidents over time.',
			'FldForeignTable' => '0',
			'FldForeignMax' => 'N',
			'FldValues' => '0;1',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 397,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Role',
			'FldEng' => 'Role in Incident',
			'FldDesc' => 'Indicates category of an Officer. This information is essential for understanding whether a given Officer was a Subject of an Allegation or a Witness to the Allegation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Subject Officer;Witness Officer',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 401,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '929',
			'FldName' => 'AdminID',
			'FldEng' => 'Primary Admin ID',
			'FldDesc' => 'The unique number of the Administrator record related to this Complaint. This number helps us identify which Administrator is the point of contact for this Complaint.',
			'FldNotes' => 'OPC staff in charge of Complaint ',
			'FldForeignTable' => '108',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 404,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Miranda',
			'FldEng' => 'Did the officer read your Miranda rights?',
			'FldDesc' => 'Indicates whether or not an Officer read a Subject their Miranda rights during Arrest. Important for evaluating possible procedure Allegation.',
			'FldNotes' => 'Failure to read subject Miranda rights turns on a "procedure" violation, and a value of Yes here is equivalent to an Allegation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 405,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldSpecSource' => '0',
			'FldName' => 'Status',
			'FldEng' => 'OPC Complaint Status',
			'FldDesc' => 'The current progress of a "complete" or "incomplete" Complaint within the OPC system. We use this information internally to determine next Administrator actions to guide a Complaint to the final status of "closed."',
			'FldNotes' => 'AKA Disposition of Complaint. <a href="extras.php?flows=1" target="_blank" class="f12">see Work Flows</a>.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Complaint Status',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 408,
			'FldDatabase' => '1',
			'FldTable' => '130',
			'FldOrd' => '1000',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '952',
			'FldName' => 'Name',
			'FldEng' => 'Username',
			'FldDesc' => 'The first half of a User\'s Authentication information which is unencrypted. This is vital for secure User entry to access the system. ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 409,
			'FldDatabase' => '1',
			'FldTable' => '130',
			'FldOrd' => '1000',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '953',
			'FldName' => 'Password',
			'FldEng' => 'Password',
			'FldDesc' => 'The second half of a User\'s Authentication information which is encrypted. This is vital for secure User entry to access the system. ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 410,
			'FldDatabase' => '1',
			'FldTable' => '130',
			'FldOrd' => '1000',
			'FldSpecSource' => '0',
			'FldName' => 'Created',
			'FldEng' => 'User Created',
			'FldDesc' => 'The date and time a User\'s authentication information was first added to the system, important for tracking how long a User has been authorized for access.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 411,
			'FldDatabase' => '1',
			'FldTable' => '130',
			'FldOrd' => '1000',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '954',
			'FldName' => 'LastLogin',
			'FldEng' => 'Last Login',
			'FldDesc' => 'The date and time a User\'s last successful login attempt, important for tracking how recently a User has accessed the system and possible disabling old unused accounts.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 416,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to this Oversight Agency. This number allows Oversight Agency contacts to log into the OPC system.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 418,
			'FldDatabase' => '1',
			'FldTable' => '108',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to an Administrator\'s record. This number allows Administrators to log into the OPC system.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 419,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to a Customer\'s record. This number allows Customers to log into the OPC system.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 422,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Department Name',
			'FldDesc' => 'The official name of the law enforcement agency. This is an essential component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 430,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'TotOfficers',
			'FldEng' => 'Total Number of Employees',
			'FldDesc' => 'The total number of sworn Officers employed by a Police Department. This information will be used for comparative statistical purposes and to determine the most likely Department on-scene during a particular Incident.',
			'FldNotes' => 'For example, if a User doesn\'t know which Police Department employed a given Subject Officer, the field list for Police Departments would begin by listing the local department with the highest number of total sworn officers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOperateSame' => '10010',
			'FldOperateOther' => '10010',
			'FldOperateValue' => '10010'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 431,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'JurisdictionPopulation',
			'FldEng' => 'Jurisdiction Population',
			'FldDesc' => 'The total number of people who live within the geographical boundaries of a Police Department. This information will help identify policing trends and for comparative statistical purposes.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldNullSupport' => '0',
			'FldCompareSame' => '6',
			'FldOperateSame' => '10010',
			'FldOperateOther' => '10010',
			'FldOperateValue' => '10010'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 432,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'JurisdictionGPS',
			'FldEng' => 'Jurisdiction GPS',
			'FldDesc' => 'A series of GPS coordinates, representing the geographical polygon of a department\'s jurisdiction. Important for identifying the Police Department attached to a Complaint -- especially when Complainants are unsure.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 457,
			'FldDatabase' => '1',
			'FldTable' => '125',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to this Privilege Profile, vital to associating permissions with a specific System User.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 458,
			'FldDatabase' => '1',
			'FldTable' => '125',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Privilege Profile, vital to associating permissions with a specific Complaint (instead of an entire Department).',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 479,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to this Action, vital for tracking System User behavior and system security.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 480,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '957',
			'FldName' => 'Timestamp',
			'FldEng' => 'Timestamp',
			'FldDesc' => 'The date and time of an Administrator\'s specific Action affecting system data, vital for tracking System User behavior and potentially providing security validation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NOW()',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 481,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Table',
			'FldEng' => 'Table Edited',
			'FldDesc' => 'Name of the table whose contents are being altered by a System User (usually an Administrator), at any point after a Complaint has been submitted. This is important tracking the table being altered.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 482,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'RecordID',
			'FldEng' => 'Table Record ID',
			'FldDesc' => 'The unique primary ID number of the record in the table whose contents are being altered by a System User (usually an Administrator), at any point after a Complaint has been submitted. This is important tracking the specific record being altered.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 483,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'OldData',
			'FldEng' => 'Old Data Values',
			'FldDesc' => 'A data dump of the initial value of all the table record\'s fields\' contents, or at least those with values being changed by a System User. This is vital to provide breadcrumbs to correct potential problems.',
			'FldNotes' => 'Data formatting TBD, but could be like JSON or XML.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 484,
			'FldDatabase' => '1',
			'FldTable' => '126',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'NewData',
			'FldEng' => 'New Data Values',
			'FldDesc' => 'A data dump of the newly updated values of all the table record\'s fields\' contents, or at least those with values being changed by a System User. This is vital to provide breadcrumbs to correct potential problems.',
			'FldNotes' => 'Data formatting TBD, but could be like JSON or XML.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 485,
			'FldDatabase' => '1',
			'FldTable' => '133',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Action',
			'FldEng' => 'Login Action',
			'FldDesc' => 'The type of login activity being tracked, vital for behavior logging and potentially providing security validation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Successful Login;Unsuccessful Login Attempt(s);Logout',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 486,
			'FldDatabase' => '1',
			'FldTable' => '133',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '957',
			'FldName' => 'Timestamp',
			'FldEng' => 'Timestamp',
			'FldDesc' => 'The date and time of a System User login, vital for tracking System User behavior and potentially providing security validation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NOW()',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 487,
			'FldDatabase' => '1',
			'FldTable' => '133',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to this Login activity, vital for tracking System User behavior and system security.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 488,
			'FldDatabase' => '1',
			'FldTable' => '133',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '951',
			'FldName' => 'IP',
			'FldEng' => 'IP Address',
			'FldDesc' => 'The encrypted IP address address of the login (attempts) to this System User\'s account, vital for security precautions and protections.',
			'FldNotes' => 'Perhaps non-Civilian Users\' IP addresses should not be encrypted.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 489,
			'FldDatabase' => '1',
			'FldTable' => '133',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TotAttempts',
			'FldEng' => 'Number of Login Attempts',
			'FldDesc' => 'The number of login attempts made before successfully logging in, or without success, vital for security precautions and protections.',
			'FldNotes' => 'Number of attempts within some time frame, TBD.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 501,
			'FldDatabase' => '1',
			'FldTable' => '125',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '920',
			'FldName' => 'DeptID',
			'FldEng' => 'Department ID',
			'FldDesc' => 'The unique number of the Department record related to this Privilege Profile, vital to associating permissions with all Complaints tied to a Police Department (instead of a single Complaint).',
			'FldForeignTable' => '111',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 502,
			'FldDatabase' => '1',
			'FldTable' => '125',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'AccessLevel',
			'FldEng' => 'Data Access Level',
			'FldDesc' => 'The permission specifications for this record\'s User\'s access to either one Complaint or one Department\'s Complaints. This is vital for determining exactly what privacy rules apply for a given User attempting to access a given Complaint.',
			'FldNotes' => 'Details TBD, with approximate categories suggested for now.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'View w/out Names;View;Edit;Manage',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 516,
			'FldDatabase' => '1',
			'FldTable' => '128',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Survey record, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 519,
			'FldDatabase' => '1',
			'FldTable' => '128',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'AuthUserID',
			'FldEng' => 'User Authentication ID',
			'FldDesc' => 'The unique number of the System User record logged in while completing this Survey record. Important for tracking which User is providing this feedback on the OPC system.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 532,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '837',
			'FldName' => 'Email',
			'FldEng' => 'Email',
			'FldDesc' => 'The valid email address provided by or for a person. This is the primary way we communicate with them.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'AAA@AAA.AAA',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 533,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '838',
			'FldName' => 'PhoneHome',
			'FldEng' => 'Home Phone',
			'FldDesc' => 'The contact number where a person can be reached at their home. This is usually a landline phone, which cannot receive text messages.',
			'FldNotes' => 'At least one phone number -- be it Home, Work, or Mobile -- should be required for public complaints.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 534,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '13',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '839',
			'FldName' => 'PhoneWork',
			'FldEng' => 'Work Phone',
			'FldDesc' => 'The contact number where persons can be reached at their place of business. This is usually a landline phone, which cannot receive text messages.',
			'FldNotes' => 'We might need to add an "extension" field for some work phone numbers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 535,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '14',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '840',
			'FldName' => 'PhoneMobile',
			'FldEng' => 'Mobile Phone',
			'FldDesc' => 'The contact number where persons can be reached on their cellular device. We may use this number for both text and voice communications.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 536,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '15',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '841',
			'FldName' => 'Address',
			'FldEng' => 'Street Address',
			'FldDesc' => 'The first line of the postal location where a person resides or is able to receive mail. This is an integral component of a person\'s complete address.',
			'FldNotes' => 'If they can\'t reliable receive mail at residence, use reliable mailing address instead.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 537,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '16',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '842',
			'FldName' => 'Address2',
			'FldEng' => 'Street Address 2',
			'FldDesc' => 'The second line, if needed, of the postal location where a person resides or is able to receive mail. This is an integral component of a person\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 538,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '17',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '843',
			'FldName' => 'AddressCity',
			'FldEng' => 'City',
			'FldDesc' => 'The metropolitan area where a person resides or is able to receive mail. This is an integral component of a person\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 539,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '18',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '844',
			'FldName' => 'AddressState',
			'FldEng' => 'State',
			'FldDesc' => 'The state or district where a person resides or is able to receive mail. This is an integral component of a person\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldInputMask' => 'AA',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 540,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '19',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '845',
			'FldName' => 'AddressZip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'The postal code where a person resides or is able to receive mail. This is an integral component of a person\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => '#####[-####]',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 541,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '21',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '847',
			'FldName' => 'Facebook',
			'FldEng' => 'Facebook',
			'FldDesc' => 'This is the URL address of a person\'s Facebook page. This is used to help verify their identities and for communicating with them if they select this as a preferred method of contact.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'http://facebook.com/AAAAAA',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 568,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '22',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '837',
			'FldName' => 'Email',
			'FldEng' => 'Email',
			'FldDesc' => 'The valid email address for an Oversight Agency contact. This is the primary way we communicate with them.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'AAA@AAA.AAA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 570,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '23',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '839',
			'FldName' => 'PhoneWork',
			'FldEng' => 'Work Phone',
			'FldDesc' => 'The contact number where Oversight Agency contact can be reached.',
			'FldNotes' => 'We might need to add an "extension" field for some work phone numbers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 572,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '24',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '841',
			'FldName' => 'Address',
			'FldEng' => 'Street Address',
			'FldDesc' => 'The first line of the postal location where an Oversight Agency contact receive mail. This is an integral component of an Oversight Agency contact\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 573,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '25',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '842',
			'FldName' => 'Address2',
			'FldEng' => 'Street Address 2',
			'FldDesc' => 'The second line, if needed, of the postal location where an Oversight Agency contact receives mail. This is an integral component of an Oversight Agency contact\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 574,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '26',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '843',
			'FldName' => 'AddressCity',
			'FldEng' => 'City',
			'FldDesc' => 'The metropolitan area where an Oversight Agency contact receives mail. This is an integral component of an Oversight Agency contact\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 575,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '27',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '844',
			'FldName' => 'AddressState',
			'FldEng' => 'State',
			'FldDesc' => 'The state or district where an Oversight Agency contact receives mail. This is an integral component of an Oversight Agency contact\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldInputMask' => 'AA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 576,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '28',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '845',
			'FldName' => 'AddressZip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'The postal code where an Oversight Agency contact receives mail. This is an integral component of an Oversight Agency contact\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => '#####[-####]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 616,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '837',
			'FldName' => 'Email',
			'FldEng' => 'Email',
			'FldDesc' => 'The valid public-facing email address for Police Departments. If we don\'t have a direct email contact with an Internal Affairs Staffer, this will be the primary way we contact Police Departments.',
			'FldNotes' => 'This is the email that would be featured on their OPC web page for this Department. We might include this in addition to a general Internal Affairs email contact, if one exists.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'AAA@AAA.AAA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 618,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '839',
			'FldName' => 'PhoneWork',
			'FldEng' => 'Work Phone',
			'FldDesc' => 'The public contact number where Police Departments can be reached.',
			'FldNotes' => 'We might need to add an "extension" field for some work phone numbers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 620,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '841',
			'FldName' => 'Address',
			'FldEng' => 'Street Address',
			'FldDesc' => 'The first line of the postal location where a Police Department receives mail. This is an integral component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 621,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '842',
			'FldName' => 'Address2',
			'FldEng' => 'Street Address 2',
			'FldDesc' => 'The second line, if needed, of the postal location where a Police Department receives mail. This is an integral component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 622,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '843',
			'FldName' => 'AddressCity',
			'FldEng' => 'City',
			'FldDesc' => 'The metropolitan area where a Police Department receives mail. This is an integral component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 623,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '844',
			'FldName' => 'AddressState',
			'FldEng' => 'State',
			'FldDesc' => 'The state or district where a Police Department receives mail. This is an integral component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldInputMask' => 'AA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 624,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '845',
			'FldName' => 'AddressZip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'The postal code where a Police Department receives mail. This is an integral component of a Police Department\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => '#####[-####]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 628,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '865',
			'FldName' => 'Gender',
			'FldEng' => 'Gender',
			'FldDesc' => 'The sex classification of a Civilian or Officer. This category is used to help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'Depending on who is selecting, this might be self-ascribed or Complainant-selected for another Civilian. Question should read, "What is the gender of the subject of the alleged misconduct?" Options should be Male, Female, and Other (please specify)',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'M;F;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 629,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '868',
			'FldName' => 'Age',
			'FldEng' => 'Age',
			'FldDesc' => 'Estimated age in years of a Civilian or Officer. This information is used to verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'Because the "Date of Birth" field will determine Complainant\'s age. This field should become visible only if a Civilian\'s age is unknown. The "Harmonised Standard 3" age ranges presented here: https://meta.wikimedia.org/wiki/Survey_best_practices#Age',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Age Ranges',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 632,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '877',
			'FldName' => 'Height',
			'FldEng' => 'Height',
			'FldDesc' => 'Estimated height of a Civilian or Officer in feet and inches. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'We should use a tool that indicates feet and inches (not just total inches.) Most people wouldn\'t describe someone as 72 inches. They would say 6 feet. ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 637,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '902',
			'FldName' => 'HairDescription',
			'FldEng' => 'Hair Description',
			'FldDesc' => 'The color, style, texture -- or other attributes of a Civilian or Officer\'s hair. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'Please describe this person\'s hair color, style, texture, and length. If they are bald or partially-bald, please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 639,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '904',
			'FldName' => 'HairFacialDesc',
			'FldEng' => 'Facial Hair Description',
			'FldDesc' => 'The attributes of a male Civilian or Officer\'s facial hair. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'The UX should start with a Y/N input before requiring description, if civilian is male. Did this person have a beard, mustache, sideburns, or goatee? Please describe their facial hair.NOTE: This selection should ONLY appear for male Civilians.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 640,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '905',
			'FldName' => 'Eyes',
			'FldEng' => 'Eyes Description',
			'FldDesc' => 'The attributes of a Civilian or Officer\'s eyes, including eyewear. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'Please describe this person\'s eyes. What color were they? Did they wear glasses? Did they have a distinctive shape? Please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 643,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '908',
			'FldName' => 'DistinguishingMarksDesc',
			'FldEng' => 'Distinguishing Marks Description',
			'FldDesc' => 'The attributes of any prominent physical characteristics on a Civilian or Officer. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'The UX should start with a Y/N input before requiring description. For example, does this person have any scars, marks, tattoos, or any other prominent physical characteristics? Please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 644,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '909',
			'FldName' => 'VoiceDesc',
			'FldEng' => 'Voice Description',
			'FldDesc' => 'The attributes of a Civilian or Officer\'s speech. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'For example, does this person have a high or low voice. Did they speak with an accent? Please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 645,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '910',
			'FldName' => 'ClothesDesc',
			'FldEng' => 'Clothes/Uniform Description',
			'FldDesc' => 'The attributes of a Civilian or Officer\'s attire. This information might help verify a Civilian or Officer\'s identity.',
			'FldNotes' => 'What was this person wearing? Please describe the color, material, style, etc.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 647,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '912',
			'FldName' => 'DisabilitiesDesc',
			'FldEng' => 'Disabilities Description',
			'FldDesc' => 'The attributes of a Civilian\'s physical or mental handicaps (not for Officers). This information might help verify a Civilian\'s identity.',
			'FldNotes' => 'The UX should start with a Y/N input before requiring description. For example, does this person use a wheelchair? Have any amputations? Mental impairments? Please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 648,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '913',
			'FldName' => 'Transportation',
			'FldEng' => 'Transportation',
			'FldDesc' => 'Indicates whether or not Civilian was in or near their vehicle during Incident. This information might help verify a Civilian\'s identity.',
			'FldNotes' => 'Subject with Vehicles are the driver during Vehicle Stops. Subjects without Vehicles during Vehicle Stops are passengers. ',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Transportation Officer',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 649,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '914',
			'FldName' => 'VehicleMake',
			'FldEng' => 'Vehicle Make',
			'FldDesc' => 'The company that manufactured a Civilian\'s vehicle. This information might help verify a Civilian\'s identity.',
			'FldNotes' => 'Vehicle makes include Toyota, Ford, Honda, Chevrolet, etc.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 650,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '915',
			'FldName' => 'VehicleModel',
			'FldEng' => 'Vehicle Model',
			'FldDesc' => 'The name or brand of the Civilian\'s vehicle. This information might help verify a Civilian\'s identity.',
			'FldNotes' => 'Vehicle models include Toyota Camry, Ford F-Series, Chevrolet Silverado, etc.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 651,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '916',
			'FldName' => 'VehicleDesc',
			'FldEng' => 'Vehicle Description',
			'FldDesc' => 'Additional attributes of the Civilian\'s vehicle. This information might help verify a Civilian\'s identity.',
			'FldNotes' => 'What color was the vehicle? Did it have any distinguishing characteristics, such as dents, customizations, etc?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 652,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '917',
			'FldName' => 'VehicleLicence',
			'FldEng' => 'Vehicle Licence Plate',
			'FldDesc' => 'The tag numbers on the Civilian\'s vehicle. This information might help verify a Civilian\'s identity.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 706,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'OPC Complaint Type',
			'FldDesc' => 'The Administrator-selected category for newly-submitted Complaint records. Essential for determining where and how new Complaint records are stored and shared.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::OPC Staff/Internal Complaint Type',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 707,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'OversightReportEvidenceID',
			'FldEng' => 'Oversight Investigative Report',
			'FldDesc' => 'The Evidence record storing the final determination letter submitted by the Oversight Agency regarding an OPC-submitted Complaint. This report provides essential information for tracking how Oversight Agencies respond to citizen complaints.',
			'FldNotes' => 'Complainants must scan these reports and upload them to their Complaint as Evidence.',
			'FldForeignTable' => '119',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 769,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Officer\'s record. Vital for associating Officer with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 771,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '926',
			'FldName' => 'Verified',
			'FldEng' => 'Contact Info Last Verified',
			'FldDesc' => 'Indicates the date and time when Police Department contact information was last verified. This is crucial for keeping track of the accuracy of Police Department contact information.',
			'FldNotes' => 'NULL value means unverified.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 772,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '926',
			'FldName' => 'Verified',
			'FldEng' => 'Contact Info Last Verified',
			'FldDesc' => 'Indicates the date and time when an Oversight Agency\'s Police contact information was last verified. This is crucial for keeping track of the accuracy of Oversight Agency\'s contact information.',
			'FldNotes' => 'NULL value means unverified.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 773,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'Investigating',
			'FldEng' => 'Investigating by Oversight Agency',
			'FldDesc' => 'Indicates the date and time when the Complainant was contacted by an Oversight Agency contact regarding the status of their Complaint or to investigate any Allegations contained in the Complaint.',
			'FldNotes' => 'Complainants must provide OPC this information. So we must send Complainants regular follow up emails to track Oversight Agency response rates and response times.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NULL',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 776,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '30',
			'FldSpecSource' => '0',
			'FldName' => 'Notes',
			'FldEng' => 'Complaint Notes',
			'FldDesc' => 'Additional annotations related to this Complaint. Might add additional information or context regarding the Complaint.',
			'FldNotes' => 'Changed to "Complaint Notes"',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 777,
			'FldDatabase' => '1',
			'FldTable' => '136',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Complaint Note. Vital for associating Complaint record to Complaint Note data.',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 778,
			'FldDatabase' => '1',
			'FldTable' => '136',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to this Complaint Note. This is vital to tracking which system user provide which new information and Evidence to a Complaint.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 779,
			'FldDatabase' => '1',
			'FldTable' => '136',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '957',
			'FldName' => 'Timestamp',
			'FldEng' => 'Timestamp',
			'FldDesc' => 'The date and time when a Note was added to a Complaint. This is vital to tracking the chronology of new updates, information, and/or Evidence appended to a completed Complaint.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NOW()',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 780,
			'FldDatabase' => '1',
			'FldTable' => '136',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Content',
			'FldEng' => 'Note Content',
			'FldDesc' => 'The main text/body of a Note being added to a Complaint, providing new information or descriptive updates of the Complaint\'s status. This is important as an open-ended tool to add extra information about a Complaint.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 782,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'CCTV',
			'FldEng' => 'Any Closed Circuit Cameras on Scene?',
			'FldDesc' => 'Indicates that there was possible video surveillance of the Scene. Important for obtaining new Evidence of the Incident.',
			'FldNotes' => 'Go back to the scene to check for CCTV cameras to chase down potential video Evidence.

If selected, we might want to email user article on How to Track Down CCTV Footage, or something like that.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 783,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'CCTVDesc',
			'FldEng' => 'Closed Circuit Camera Descriptions',
			'FldDesc' => 'Narrative details about the type and location of any visible video surveillance cameras. Might help Oversight Agencies or Attorneys track down new Evidence of the Incident.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 785,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '918',
			'FldName' => 'CameraRecord',
			'FldEng' => 'Recorded Event?',
			'FldDesc' => 'Indicates whether or not this Civilian recorded the Incident. This information might help us track down new video Evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 786,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'BodyCam',
			'FldEng' => 'Officer Wearing On-body Camera?',
			'FldDesc' => 'Indicates whether or not the Officer was wearing a body-mounted camera. Essential for obtaining possible video Evidence of the Incident.',
			'FldNotes' => 'We will need to create document with tips on obtaining dash-cam and on-body camera footage.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 788,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'SubmissionProgress',
			'FldEng' => 'Submission Progress',
			'FldDesc' => 'Indicates current progress of an "incomplete" Complaint. Important for identifying problem areas which might cause Complaints to be left unfinished.',
			'FldNotes' => 'TBD: [Shorthand] notation of where in the complaint submission process. Probably both an overall section identifier (like Turbo Tax), and sub-section identifier.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 789,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Summary',
			'FldEng' => 'Summary (Narrative)',
			'FldDesc' => 'The Complainant narrative describes the chronological sequence of key Incident events and Allegations. This story brings to life to an otherwise clinical and legalistic Complaint document.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 791,
			'FldDatabase' => '1',
			'FldTable' => '120',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The unique number of the Incident Event record related to this Order record. This is important for associating this Order with a Stop, Search, Use of Force, or Arrest.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 799,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '14',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The unique number of the Incident Event record related to this Evidence record. This is important when this piece of Evidence documents a Stop, Search, Use of Force, or Arrest.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 804,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '842',
			'FldName' => 'Address2',
			'FldEng' => 'Street Address 2',
			'FldDesc' => 'The second line, if needed of the postal location at or near where an Incident occurred. This is an integral component of a complete Incident location address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 805,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '843',
			'FldName' => 'AddressCity',
			'FldEng' => 'City',
			'FldDesc' => 'The metropolitan area where an Incident occurred. This is an integral component of a complete Incident location address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldRequired' => '1',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 806,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '4',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '844',
			'FldName' => 'AddressState',
			'FldEng' => 'State',
			'FldDesc' => 'The state or district where an Incident occurred. This is an integral component of a complete Incident location address.',
			'FldNotes' => 'Incident locations should only include locations within the 50 U.S. states and the District of Columbia.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldInputMask' => 'AA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldRequired' => '1',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 807,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '845',
			'FldName' => 'AddressZip',
			'FldEng' => 'Zip Code',
			'FldDesc' => 'The postal code where an Incident occurred. This is an integral component of a complete Incident location address.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => '#####[-####]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 808,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'AddressLat',
			'FldEng' => 'Geolocation Latitude',
			'FldDesc' => 'The geographic coordinate that specifies the north-south position of the point on the Earth\'s surface where an Incident occurred. This information might help identify Police Departments whose jurisdictions cover the coordinates where an Incident occurred.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DOUBLE',
			'FldDataLength' => '0',
			'FldDataDecimals' => '10',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 809,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'AddressLng',
			'FldEng' => 'Geolocation Longitude',
			'FldDesc' => 'The geographic coordinate that specifies the east-west position of the point on the Earth\'s surface where an Incident occurred. This information might help identify Police Departments whose jurisdictions cover the coordinates where an Incident occurred.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DOUBLE',
			'FldDataLength' => '0',
			'FldDataDecimals' => '10',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 810,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Type of Department',
			'FldDesc' => 'The general category of a particular law enforcement agency. This information helps us identify the responsibilities and jurisdiction of a given Police Department. ',
			'FldNotes' => 'Detailed Google Doc: https://docs.google.com/document/d/1OZBZYd8V7gC3es46Z5sWrfu2IRvhrK1CkfV8vKp8xgY/edit?usp=sharing',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Types of Departments',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 812,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'IntimidatingWeapon',
			'FldEng' => 'Intimidating Display Of Weapon?',
			'FldDesc' => 'The Officer brandished or discharged a weapon in threatening manner. Important for identifying non-Force complaints where an Officer might have used a weapon for intimidation purposes.',
			'FldNotes' => 'IF this Complaint includes a Use of Force Allegation, THEN the Complainant should NOT be offered this Weapon Intimidation Allegation.

Weapon-related threats do not apply to weapons safely in holsters. Actual use of weapon AGAINST a person is use of Force, not just Intimidation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Intimidating Displays Of Weapon',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 815,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'IntimidatingWeaponType',
			'FldEng' => 'If Intimidating Display of Weapon, What Weapon?',
			'FldDesc' => 'The category of weapon the Officer used in a threatening manner. Important for identifying whether an Officer might have violated Department policies or procedures.',
			'FldNotes' => 'Range of Values is a subset of Force Type, which can be used for intimidation. Hide Force Type Definitions: Control Hold, Body Weapons, Takedown, Vehicle',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Force Type',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 816,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'SubjectHandcuffInjury',
			'FldEng' => 'Handcuff Injury ID',
			'FldDesc' => 'Indicates whether or not the Subject reported any Injuries related to an Officer\'s misuse of handcuffs. Important for connecting with possible Use of Force.',
			'FldNotes' => 'Injuries from handcuffs should only link to an Allegation of Excessive Force if and only if the Complainant provides Evidence of Injury.

NULL if No',
			'FldForeignTable' => '117',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 817,
			'FldDatabase' => '1',
			'FldTable' => '137',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this Incident Event, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 818,
			'FldDatabase' => '1',
			'FldTable' => '137',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Order',
			'FldEng' => 'Event Order',
			'FldDesc' => 'The is the chronological rank of events within an incident, identifying the order in which they occurred. This is vital to presenting the Stops, Searches, Uses of Force, and Arrests in the order they occurred during the Incident.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 823,
			'FldDatabase' => '1',
			'FldTable' => '113',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Allegation Description',
			'FldDesc' => 'Additional narrative information about a specific Allegation. Might provide additional  context to help investigate and verify these Allegations.',
			'FldNotes' => 'Anytime a user indicate an Allegation they will be prompted for additional information to describe the Allegation or why they think the Allegation should apply.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 824,
			'FldDatabase' => '1',
			'FldTable' => '138',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Charges',
			'FldEng' => 'Citations Charges',
			'FldDesc' => 'Category of citation charge (or charges) an Officer issued a Subject. Important for evaluating wrongful citation Allegations and tracking citation trends.',
			'FldNotes' => 'Complainants should be able to select multiple Citations, because we want to be able to track Officers who are Citation-crazy.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Citation Charges',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 829,
			'FldDatabase' => '1',
			'FldTable' => '138',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '0',
			'FldName' => 'StopID',
			'FldEng' => 'Stop ID',
			'FldDesc' => 'The unique number of the Stop record related to this Citation Charge.',
			'FldForeignTable' => '121',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 830,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '27',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'NameFirst',
			'FldEng' => 'First Name',
			'FldDesc' => 'The legal given name of a person related to this record that we use in all formal communications with that person or regarding that person.',
			'FldNotes' => 'Use the legal spelling and format of their first name even if they use the initial of their first name and prefer their middle name. http://departments.weber.edu/qsupport&training/Data_Standards/Name.htm',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 832,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '29',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'NameMiddle',
			'FldEng' => 'Middle Name',
			'FldDesc' => 'The name of a Complainant, placed between their first name and before their surname, that we use in all formal communications with Complainants or regarding Complainants.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 833,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '31',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'NameSuffix',
			'FldEng' => 'Name Suffix',
			'FldDesc' => 'Letters added after a person\'s last name related to this record -- which provide additional information about their title or inherited name -- that we use in all formal communications with that person or regarding that person.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 834,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '26',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'NamePrefix',
			'FldEng' => 'Name Prefix',
			'FldDesc' => 'Letters placed before a person\'s first name related to this record, whether original or by title, that we use in all formal communications with that person or regarding that person.',
			'FldNotes' => '"Name Prefix" should also include titles (e.g. "Judge" or "Vice Admiral"). Field may be left blank. Question: If these are generic fields, will this incident-involved definition apply to IA staff, Attorneys, and others not directly associated with incident?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 835,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '30',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'NameLast',
			'FldEng' => 'Last Name',
			'FldDesc' => 'The legal surname of a person related to this record that we use in all formal communications with that person or regarding that person.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 837,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '32',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Email',
			'FldEng' => 'Email',
			'FldDesc' => 'The valid email address provided by Complainants. This is the primary way we communicate with them.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'AAA@AAA.AAA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 838,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '33',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'PhoneHome',
			'FldEng' => 'Home Phone',
			'FldDesc' => 'The contact number where the person can be reached at their home. This is usually a landline phone, which cannot receive text messages.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 839,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '34',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'PhoneWork',
			'FldEng' => 'Work Phone',
			'FldDesc' => 'The contact phone number where the person can be reached at their place of employment. This is usually a landline phone, which cannot receive text messages.',
			'FldNotes' => 'We might need to add an "extension" field for some work phone numbers.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 840,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '35',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'PhoneMobile',
			'FldEng' => 'Mobile Phone',
			'FldDesc' => 'The contact number where the person can be reach on their cellular device. We may use this number for both text and voice communications.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => '###-###-#### [x###]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 841,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '36',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Address',
			'FldEng' => 'Street Address',
			'FldDesc' => 'The postal location at or near where an Incident occurred or the postal location where a contact resides.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 842,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '37',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Address2',
			'FldEng' => 'Street Address 2',
			'FldDesc' => 'Line 2 of person\'s address, if needed',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 843,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '38',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AddressCity',
			'FldEng' => 'City',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 844,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '39',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AddressState',
			'FldEng' => 'State',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '2',
			'FldCharSupport' => ',Letters,',
			'FldInputMask' => 'AA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 845,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '40',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AddressZip',
			'FldEng' => 'Zip Code',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => '#####[-####]',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 846,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '41',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Birthday',
			'FldEng' => 'Date of Birth',
			'FldDesc' => 'The month, day, and year a Complainant was born. This information is used to help verify a Complainant\'s identity.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATE',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => 'YYYY-MM-DD',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldCompareValue' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 847,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '42',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Facebook',
			'FldEng' => 'Facebook',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldInputMask' => 'http://facebook.com/AAAAAA',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 860,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'AgainstAnimal',
			'FldEng' => 'Against Animal',
			'FldDesc' => 'Indicates that this use of Force was directed against a non-human pet or animal. Important for identifying and tracking animal cruelty Allegations.',
			'FldNotes' => 'IF "Yes" force was used against an animal, and "Yes" this is allegation-worthy excessive use of force, THEN this is an Animal Cruelty Allegation.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 861,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'AnimalDesc',
			'FldEng' => 'Describe Animal',
			'FldDesc' => 'Narrative description of animal that Officer Force was directed against. Important for verifying animal cruelty Allegations.',
			'FldNotes' => 'Tells us about the animal. For example, what kind of animal is it? Is it a wild animal or stray? Or is it a family pet? Please describe.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 864,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'ForcibleEntry',
			'FldEng' => 'Forcible Entry or SWAT Raid?',
			'FldDesc' => 'Indicates that the Incident involved the use of a forcible entry, SWAT raids, or drug task force. Important for evaluating SWAT incidents and trends.',
			'FldNotes' => 'This should only appear as an option if users selects from Home or Private Residence; Workplace; School or University Property from Scene Type options.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 865,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '43',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Gender',
			'FldEng' => 'Gender',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'M;F;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 866,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The primary ID of the Complaint record related to the this table\'s record.',
			'FldForeignTable' => '112',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 867,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '1',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'ComplimentID',
			'FldEng' => 'Compliment ID',
			'FldDesc' => 'The primary ID of the Compliment record related to the this table\'s record.',
			'FldForeignTable' => '134',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowNot',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 868,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '44',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Age',
			'FldEng' => 'Age',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => '0-15;16-24;24-34;35-44;45-54;55-64;65-74;75-84;85+',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 869,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '45',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Race',
			'FldEng' => 'Race',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Races',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 877,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '47',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '838',
			'FldName' => 'Height',
			'FldEng' => 'Height',
			'FldNotes' => 'Converted to Inches',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 889,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'GunAmmoType',
			'FldEng' => 'What type of ammo did this officer\'s gun use?',
			'FldDesc' => 'Category of ammunition an Officer used on a Subject. Important for investigating Allegations of Force and for identifying Force trends.',
			'FldNotes' => 'Only if Force Type is \'Gun\'.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Gun Ammo Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 890,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'GunDesc',
			'FldEng' => 'Describe gun, and specific type if known.',
			'FldDesc' => 'Narrative details of gun Officer used on Suspect. Important for investigating Allegations of Force and for identifying Force trends.',
			'FldNotes' => 'Only if Force Type is \'Gun\'.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 894,
			'FldDatabase' => '1',
			'FldTable' => '143',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '948',
			'FldName' => 'EvidenceID',
			'FldEng' => 'Evidence ID',
			'FldDesc' => 'The unique number of the Evidence record related to this Evidence Timestamp. Important for specifying in which video this timestamp can be found.',
			'FldForeignTable' => '119',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldDefault' => 'NULL',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 895,
			'FldDatabase' => '1',
			'FldTable' => '143',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '941',
			'FldName' => 'AllegationID',
			'FldEng' => 'Related Allegation ID',
			'FldDesc' => 'The unique number of the Allegation record related to this Evidence Timestamp. Important for associating with the specific Allegation documented in this video.',
			'FldForeignTable' => '113',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 896,
			'FldDatabase' => '1',
			'FldTable' => '143',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Timestamp',
			'FldEng' => 'Video Timestamp',
			'FldDesc' => 'The number of seconds from the start of the video Evidence, when the events causing the Allegation unfold. This is important for speeding up the Complaint review process for all parties involved, allowing one to jump to review the most relevant and significant parts a video evidence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 902,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '52',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'HairDescription',
			'FldEng' => 'Hair Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 904,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '54',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'HairFacialDesc',
			'FldEng' => 'Facial Hair Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 905,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '55',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Eyes',
			'FldEng' => 'Eyes Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 908,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '58',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'DistinguishingMarksDesc',
			'FldEng' => 'Distinguishing Marks Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 909,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '59',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'VoiceDesc',
			'FldEng' => 'Voice Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 910,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '60',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'ClothesDesc',
			'FldEng' => 'Clothes Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 912,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '62',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'DisabilitiesDesc',
			'FldEng' => 'Disabilities Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 913,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '63',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Transportation',
			'FldEng' => 'Transportation',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Foot;Car;Van;Bike;Boat;Motorcycle;Helicopter',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 914,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '64',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'VehicleMake',
			'FldEng' => 'Vehicle Make',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 915,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '65',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'VehicleModel',
			'FldEng' => 'Vehicle Model',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 916,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '66',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'VehicleDesc',
			'FldEng' => 'Vehicle Description',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 917,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '67',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'VehicleLicence',
			'FldEng' => 'Vehicle Licence Number',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 918,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '68',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'CameraRecord',
			'FldEng' => 'Recorded Event?',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 920,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '2',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'DeptID',
			'FldEng' => 'Department ID',
			'FldDesc' => 'The primary ID of the Department record related to the this table\'s record.',
			'FldForeignTable' => '111',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 921,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '22',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AuthUserID',
			'FldEng' => 'User Authentication ID',
			'FldDesc' => 'The primary ID of the System User record related to the this table\'s record.',
			'FldForeignTable' => '130',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 922,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '69',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Title',
			'FldEng' => 'Title',
			'FldDesc' => 'Title of this person\'s role in their organization.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 923,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '70',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'CompanyName',
			'FldEng' => 'Company Name',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 924,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '71',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'CompanyWebsite',
			'FldEng' => 'Company Website',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 925,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '4',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'OversightID',
			'FldEng' => 'Oversight ID',
			'FldDesc' => 'The primary ID of the Oversight record related to the this table\'s record.',
			'FldForeignTable' => '106',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 926,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '72',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Verified',
			'FldEng' => 'Contact Info Last Verified',
			'FldNotes' => 'NULL value means unverified.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 927,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '9',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'IncidentID',
			'FldEng' => 'Incident ID',
			'FldDesc' => 'The primary ID of the Incident record related to the this table\'s record.',
			'FldForeignTable' => '114',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 928,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '25',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'CustomerID',
			'FldEng' => 'Customer ID',
			'FldDesc' => 'The primary ID of the Customer record related to the this table\'s record.',
			'FldForeignTable' => '110',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 929,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '23',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AdminID',
			'FldEng' => 'Primary Admin ID',
			'FldDesc' => 'The primary ID of the Administrator record related to the this table\'s record.',
			'FldNotes' => 'OPC staff in charge of Complaint ',
			'FldForeignTable' => '108',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 932,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '13',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'StopID',
			'FldEng' => 'Related Stop ID',
			'FldDesc' => 'The primary ID of the Stop record related to the this table\'s record.',
			'FldForeignTable' => '121',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 933,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '14',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'SearchID',
			'FldEng' => 'Related Search ID',
			'FldDesc' => 'The primary ID of the Search record related to the this table\'s record.',
			'FldForeignTable' => '122',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 934,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '15',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'PropertyID',
			'FldEng' => 'Related Property ID',
			'FldDesc' => 'The primary ID of the Property record related to the this table\'s record.',
			'FldForeignTable' => '118',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 935,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '16',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'ForceID',
			'FldEng' => 'Related Force ID',
			'FldDesc' => 'The primary ID of the Force record related to the this table\'s record.',
			'FldForeignTable' => '116',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 936,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '20',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestID',
			'FldEng' => 'Related Arrest ID',
			'FldDesc' => 'The primary ID of the Arrest record related to the this table\'s record.',
			'FldForeignTable' => '123',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 938,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '73',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'TimeStart',
			'FldEng' => 'Start Time',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 939,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '74',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'TimeEnd',
			'FldEng' => 'End Time',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 940,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '75',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Duration',
			'FldEng' => 'Duration',
			'FldDesc' => 'In Minutes, calculated based on Start Time and End Time.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '5',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 941,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '11',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'AllegationID',
			'FldEng' => 'Related Allegation ID',
			'FldDesc' => 'The primary ID of the Allegation record related to the this table\'s record.',
			'FldForeignTable' => '113',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 944,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '10',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'SceneID',
			'FldEng' => 'Scene ID',
			'FldDesc' => 'The primary ID of the Scene record related to the this table\'s record.',
			'FldNotes' => 'For optionally associating Photographs, Diagrams, Documents, or Videos with a Scene.',
			'FldForeignTable' => '115',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 945,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '17',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'InjuryID',
			'FldEng' => 'Injury ID',
			'FldDesc' => 'The primary ID of the Injury record related to the this table\'s record.',
			'FldNotes' => 'For optionally associating Photographs, Diagrams, Documents, or Videos with an Injury.',
			'FldForeignTable' => '117',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 947,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '5',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'CivilianID',
			'FldEng' => 'Civilian ID',
			'FldDesc' => 'The primary ID of the Civilian record related to the this table\'s record.',
			'FldForeignTable' => '102',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 948,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '18',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'EvidenceID',
			'FldEng' => 'Evidence ID',
			'FldDesc' => 'The primary ID of the Evidence record related to the this table\'s record.',
			'FldForeignTable' => '119',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NULL',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 949,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '6',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerID',
			'FldEng' => 'Officer ID',
			'FldDesc' => 'The primary ID of the Officer record related to the this table\'s record.',
			'FldForeignTable' => '104',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 950,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '19',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'OrderID',
			'FldEng' => 'Order ID',
			'FldDesc' => 'The primary ID of the Order record related to the this table\'s record.',
			'FldForeignTable' => '120',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 951,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '76',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'IP',
			'FldEng' => 'IP Address',
			'FldNotes' => 'IP addresses may want to be encrypted.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 952,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '77',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Name',
			'FldEng' => 'Username',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 953,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '78',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Password',
			'FldEng' => 'Password',
			'FldNotes' => 'Encrypted',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 954,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '79',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'LastLogin',
			'FldEng' => 'Last Login',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 955,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '80',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerRank',
			'FldEng' => 'Officer Rank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Police Officer;Detective;Corporal;Sergeant;Lieutenant;Captain;Staff Inspector;Inspector;Chief Inspector;Deputy Commissioner;Commissioner;?',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 956,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '81',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'BadgeNumber',
			'FldEng' => 'Badge Number',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 957,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '82',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Timestamp',
			'FldEng' => 'Timestamp',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDefault' => 'NOW()',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldDisplayFormat' => 'YYYY-MM-DD HH:MM:SS',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 959,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '12',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The primary ID of the Event Sequence record related to the this table\'s record.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 960,
			'FldDatabase' => '1',
			'FldTable' => '113',
			'FldOrd' => '2',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The unique number of the Incident Event record related to this Allegation. This is important for linking the Allegation to a specific Stop, Search, Use of Force, or Arrest.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Foreign',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 962,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerRefuseID',
			'FldEng' => 'Did Officer Refuse To Provide ID?',
			'FldDesc' => 'Indicates whether or not the Officer shared their name and/or badge number after Subject requested it. Important for identifying possible violation of Department procedure.',
			'FldNotes' => 'We might use this opportunity to let Complainants know that insisting Officers share their badge number isn\'t always a smart move.

Tip: It\'s okay if you didn\'t get the badge or vehicle number. An officer--s identity can usually be established with a time, location, and physical description.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 963,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'AddressCounty',
			'FldEng' => 'County',
			'FldDesc' => 'The state region where a local Police Department is headquartered or has jurisdiction. This information helps us track which Police Departments have jurisdiction over a specific Incident location.',
			'FldNotes' => 'Not applicable to Departments with Federal and Statewide jurisdictions.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 964,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '967',
			'FldName' => 'Precinct',
			'FldEng' => 'Department Precinct/District',
			'FldDesc' => 'The district within a city or municipality where an Officer is assigned. This information might help us  verify an Officer\'s identity.',
			'FldNotes' => 'Most Departments will NOT have precinct. However, precincts or districts usually exist in big cities.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 965,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '83',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'IDnumber',
			'FldEng' => 'Additional ID#',
			'FldNotes' => 'Eg. in New York, officers have a consistent Tax ID.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 967,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '84',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Precinct',
			'FldEng' => 'Department Precinct',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '2'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 969,
			'FldDatabase' => '1',
			'FldTable' => '114',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Landmarks',
			'FldEng' => 'Nearby Landmarks',
			'FldDesc' => 'An easily-recognized place, object, or feature that can help establish a precise Incident location. Useful for identifying locations where an address alone won\'t suffice.',
			'FldNotes' => 'e.g. near a memorial inside a large park.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 970,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'DashCam',
			'FldEng' => 'Officer Dash Cam',
			'FldDesc' => 'Indicates whether or not the Officer\'s vehicle had a dashcam. Essential for obtaining possible video Evidence of the Incident.',
			'FldNotes' => 'The Complainant won\'t likely know if there was a dashcam. This is intended as a prompt to urge Complainants to seek this information on their own or with an Attorney\'s help. 

On 9/17, we decided not to include this in the UI specs because most complainants will 1) not know if there is a dash cam; 2) won\'t be able to access any available footage without lawyer; and 3) this could be an unnecessary and complex distraction for users.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 971,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '28',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'Nickname',
			'FldEng' => 'Nickname',
			'FldDesc' => 'Preferred first name of a Complainant that we only use in personal communications with Complainants.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 973,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '971',
			'FldName' => 'Nickname',
			'FldEng' => 'Nickname',
			'FldDesc' => 'Preferred first name of persons that we may use in less-formal communications with them. Important for maintaining cordial relationships with these key contacts.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 977,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '971',
			'FldName' => 'Nickname',
			'FldEng' => 'Nickname',
			'FldDesc' => 'Preferred first name of Oversight Agency contacts that we use in less-formal communications with them. Important for maintaining cordial relationships with these key contacts.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 984,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'IsCreator',
			'FldEng' => 'Is Creator?',
			'FldDesc' => 'Indicates that this Civilian is the person who created the Complaint or Compliment. This information helps us identity Complainants who are also Subjects or Witnesses.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N',
			'FldDefault' => 'N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 985,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '921',
			'FldName' => 'UserID',
			'FldEng' => 'User ID',
			'FldDesc' => 'The primary User Authentication number connected to a Civilian\'s record. Important for allowing Complainants to log into OPC to complete Complaints or update Complaints.',
			'FldForeignTable' => '130',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 987,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Oversight Type',
			'FldDesc' => 'Indicates category of Oversight Agency. This information is essential for determining if a given Oversight Agency is either an Internal Affairs Department or a Citizen Oversight Agency. (They cannot be both.)',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Oversight Agency Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 988,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Customer Occupation',
			'FldDesc' => 'The profession of a Customer. This information helps us keep track of who is using our product and identify potential marketing opportunities for new Customers.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Customer Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 990,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Role',
			'FldEng' => 'Role in Incident',
			'FldDesc' => 'Indicates category of a Civilian. This information is essential for understanding whether a given Civilian was a Subject of an Allegation or a Witness to the Allegation.',
			'FldNotes' => 'People cannot be both a Subject and a Witness to an Incident. If considered both, then they are a Subject.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Witness;Subject;Neither',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 991,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'AgncName',
			'FldEng' => 'Agency Name',
			'FldDesc' => 'The official name of an Oversight Agency. This is an essential component of a Oversight Agency\'s complete address.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 993,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '14',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '924',
			'FldName' => 'Website',
			'FldEng' => 'Website',
			'FldDesc' => 'The page URL of the Civilian Oversight Agency or Internal Affairs Department. Ideally provides clear information about the Police Department\'s complaint process.',
			'FldNotes' => 'IMPORTANT: Oversight Agencies include both Civilian Oversight Agencies (COAs) and Internal Affairs (IA) Departments. If a Police Department has a NACOLE-approved COA, use their URL instead of the Department\'s IA URL.
https://nacole.org/resources/u-s-oversight-agency-websites/

Keep in mind that a .gov URL with clear-cut police complaint information will frequently be absent or difficult to find. If that\'s the case, OPC\'s web form must clearly indicate this absence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 994,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '1000',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'BodyType',
			'FldEng' => 'Body Type',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Slim/Slender;Medium/Average;Athletic/Muscular;Large/Fat',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 995,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '994',
			'FldName' => 'BodyType',
			'FldEng' => 'Body Type',
			'FldDesc' => 'General category of a Civilian or Officer\'s body shape. This information might help verify a Civilian or Officer\'s identity.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Body Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 997,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '1000',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'LinkedIn',
			'FldEng' => 'LinkedIn',
			'FldDesc' => 'The URL link to a Customer\'s LinkedIn profile page. This information helps us keep track of who is using our product and identify potential marketing opportunities for new Customers.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 998,
			'FldDatabase' => '1',
			'FldTable' => '144',
			'FldOrd' => '1000',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record, vital to associating with all other Complaint data, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 999,
			'FldDatabase' => '1',
			'FldTable' => '144',
			'FldOrd' => '1000',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '920',
			'FldName' => 'DeptID',
			'FldEng' => 'Department ID',
			'FldDesc' => 'The unique number of the Department record related to this Complaint. This number helps us identify which Department this Complaint is directed and therefore which Oversight Agency should be contacted.',
			'FldForeignTable' => '111',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1000,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '866',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record, vital to associating with all other Complaint data, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldEditRule' => 'NowNot',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1001,
			'FldDatabase' => '1',
			'FldTable' => '0',
			'FldOrd' => '1000',
			'FldSpecType' => 'Generic',
			'FldSpecSource' => '0',
			'FldName' => 'WebComplaintInfo',
			'FldEng' => 'Website Complaint Information',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1003,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'HomepageComplaintLink',
			'FldEng' => 'Homepage Complaint Link?',
			'FldDesc' => 'Indicates whether or not a Police Department--s main homepage has a visible link to complaint information. (It should, but most will not.)',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1004,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '19',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '1001',
			'FldName' => 'WebComplaintInfo',
			'FldEng' => 'Website Complaint Information URL',
			'FldDesc' => 'Indicates whether or not the designated Oversight Agency URL (if there is one) has clear-cut info on how about how the complaints process works. (Most will not.)',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1005,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'StripSearchDesc',
			'FldEng' => 'Strip Search Description',
			'FldDesc' => 'Narrative details about the nature of the strip search. Important for identifying particularly egregious wrongful search Allegations -- including cavity searches. ',
			'FldNotes' => 'We understand that this isn\'t easy, but please provide as much detail as you can about the strip search. The more information you provide, the better we can help address your complaint. ',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1006,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'DutyStatus',
			'FldEng' => 'Duty Status',
			'FldDesc' => 'Category indicates whether Officer was on-duty or off-duty during Incident. Particularly important for investigating Allegations against off-duty officers.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'On-Duty;Off-Duty;?',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1007,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'VehicleNumber',
			'FldEng' => 'Vehicle Number',
			'FldDesc' => 'A unique vehicle ID number. Important for verifying an Officer\'s identity or Department.',
			'FldNotes' => 'This is not the same as License Number.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1008,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'AdditionalDetails',
			'FldEng' => 'Additional Details',
			'FldDesc' => 'Supplemental narrative details about Officers involved in Incident. Important for verifying an Officer\'s identity or Department.',
			'FldNotes' => 'This field only used for light/bronze version of user experience.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1011,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '1',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '935',
			'FldName' => 'SubjectID',
			'FldEng' => 'Subject ID',
			'FldDesc' => 'Indicates which Subject received Injury Care tracked in this record. Important for identifying and matching specific uses of Force with specific Injuries received during an Incident.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1012,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The primary ID of the Incident Event record related to this Force record. This is important for establishing this Force\'s position in the chronology of events, and associating one or more Civilians and one or more Officers with this Force.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldValuesEnteredBy' => 'System',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1013,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The primary ID of the Incident Event record related to this Arrest record. This is important for establishing this Arrest\'s position in the chronology of events, and associating one or more Civilians and one or more Officers with this Arrest.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1014,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The primary ID of the Incident Event record related to this Search record. This is important for establishing this Search\'s position in the chronology of events, and associating one or more Civilians and one or more Officers with this Search.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1015,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '959',
			'FldName' => 'EventSequenceID',
			'FldEng' => 'Event Sequence ID',
			'FldDesc' => 'The primary ID of the Incident Event record related to this Stops record. This is important for establishing this Stop\'s position in the chronology of events, and associating one or more Civilians and one or more Officers with this Stop.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1016,
			'FldDatabase' => '1',
			'FldTable' => '146',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'GotMedical',
			'FldEng' => 'Got Medical Care?',
			'FldDesc' => 'Indicates whether or not an Injured Civilian received medical care from a licensed medical practitioner. Essential for urging Injured Civilians to seek medical care who haven\'t received it yet.',
			'FldNotes' => 'Implementation Note: We must urge users with fresh Injuries to seek medical care if they haven\'t yet. Because official medical records are essential for substantiating Force Allegations.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyType' => 'Non',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1017,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'NoteID',
			'FldEng' => 'Attached to Note',
			'FldDesc' => 'The optional unique number of the Complaint Note record, with which this Evidence has been uploaded. This is vital for adding Evidence to a Complaint after it\'s initial submission is complete.',
			'FldForeignTable' => '136',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1018,
			'FldDatabase' => '1',
			'FldTable' => '143',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'Description',
			'FldEng' => 'Timestamp Description',
			'FldDesc' => 'A short description or clarification of how this moment in the video Evidence provides support for the Allegation in question. This might be important for more subtle Allegations or lower quality videos.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1022,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'RecordSubmitted',
			'FldEng' => 'Record Submitted',
			'FldDesc' => 'Date and time when this Complaint was completed and submitted to the OPC database.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => 'YYYY-MM-DD HH:MM:SS',
			'FldEditRule' => 'LateNot',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1023,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'SessionSeconds',
			'FldEng' => 'Total Duration of Sessions in Seconds',
			'FldDesc' => 'The total number of seconds spent by a Complainant to complete this Complete. This is important for analyzing user experiences.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1024,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'NumberOfSessions',
			'FldEng' => 'Number Of Sessions To Complete',
			'FldDesc' => 'The number of separate times a Complainant had to login to complete this Complete. This is important for analyzing user experiences.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '6',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1025,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'ScoreOpenness',
			'FldEng' => 'Openness Score',
			'FldDesc' => 'This indicates an overall rating for a Police Department\'s online presence and the quality of their Complaint submission process. This is important for encouraging Departments to improve these metrics.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '6',
			'FldOperateSame' => '10010'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1026,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'ComplaintWebForm',
			'FldEng' => 'Website Complaint Form URL',
			'FldDesc' => 'Indicates whether or not the designated Police Department website has a form to allow complaints to be submitted online. (Most will not.)',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1027,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'RequestID',
			'FldEng' => 'Did the officer request your ID?',
			'FldDesc' => 'Indicates whether or not the Officer requested the Subject\'s identification. Important for identifying possible violation of Department procedure.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1028,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'Headline',
			'FldEng' => 'Narrative Headline (for social media sharing only)',
			'FldDesc' => 'The Complaint headline briefly describes the Incident, and would only be appear when sharing a public complaint on social media (eg. the title when sharing a link on Facebook). This is important for viral spreading of OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1029,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'Occupation',
			'FldEng' => 'Occupation',
			'FldDesc' => 'The profession of a Civilian. This information can help investigators identify Civilians.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldCompareSame' => '130',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1030,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'SummaryPublic',
			'FldEng' => 'Concise Final Summary (Narrative)',
			'FldDesc' => 'Most public and brief version of the Complainant narrative, used as the description for social media sharing. This story brings to life to an otherwise clinical and legalistic Complaint document which can safely be published on the OPC website.',
			'FldNotes' => 'For Complaints with the privacy setting for "Names Visible to Police but not Public" AKA "Partial", during initial review by OPC, staff will tweak narrative to swap any names with placeholders, perhaps [Subject #1], [Witness #2], [Officer #3].',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'TEXT',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1031,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'AwardMedallion',
			'FldEng' => 'Award Medallion',
			'FldDesc' => 'The current level of detail asked of Complainant based on their selection. We use this information internally to determine what fields to show the Complainant, and what Medallion up-sells to encourage when appropriate.',
			'FldNotes' => 'Defaults to Gold.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Silver;Gold',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1032,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'ReportDate',
			'FldEng' => 'Date of Oversight Investigative Report',
			'FldDesc' => 'Indicates the date and time when an Oversight Agency contact regarding the status of their Complaint or to investigate any Allegations contained in the Complaint.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldOperateSame' => '70',
			'FldOperateOther' => '70'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1033,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Privacy',
			'FldEng' => 'Privacy Setting',
			'FldDesc' => 'Indicates the whether or not this piece of Evidence can be shown on the public website. Important for sharing some Evidence and not others.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Private;Public',
			'FldDefault' => 'Private',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '10'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1034,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'PermissionEnter',
			'FldEng' => 'Officer request permission to enter a private residence or workplace?',
			'FldDesc' => 'Indicates whether or not the Officer requested permission to enter a private residence or workplace. Important for identifying possible violation of Department procedure.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1035,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'PermissionEnterGranted',
			'FldEng' => 'Subject grant permission to enter a private residence or workplace?',
			'FldDesc' => 'Indicates whether or not the Civilian granted an Officer permission to enter a private residence or workplace. Important for identifying possible violation of Department procedure.',
			'FldNotes' => 'If Complainant respond "No", then prompt for Wrongful Entry Allegation (with description).',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1036,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'EnterPrivateProperty',
			'FldEng' => 'Officer entered private property?',
			'FldDesc' => 'Indicates whether or not the an Officer entered a private residence or workplace. Important for identifying possible violation of Department procedure.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1037,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'EnterPrivatePropertyDesc',
			'FldEng' => 'Officer entered private property: Describe',
			'FldDesc' => 'Describes how an Officer entered a private residence or workplace. Important for identifying possible violation of Department procedure.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1038,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'PhysDescID',
			'FldEng' => 'Physical Description ID',
			'FldDesc' => 'The primary Physical Description record number connected to a Civilian\'s record. Important for linking name and basic contact information to a Civilian.',
			'FldForeignTable' => '153',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1039,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'PhysDescID',
			'FldEng' => 'Physical Description ID',
			'FldDesc' => 'The primary Physical Description record number connected to a Officer\'s record. Important for linking name and basic contact information to a Officer.',
			'FldForeignTable' => '153',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1040,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'RequestOfficerID',
			'FldEng' => 'Did the subject request an officer\'s ID?',
			'FldDesc' => 'Indicates whether or not a Subject requested the Officer\'s identification. Important for identifying possible violation of Department procedure.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1041,
			'FldDatabase' => '1',
			'FldTable' => '120',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'TroubleUnderYN',
			'FldEng' => 'Subject Trouble Understanding Order?',
			'FldDesc' => 'Indicates whether or not a Subject had difficulty hearing or understanding an Officer\'s order during a Use of Force. Important for evaluating Force Allegations.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1042,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'ComplaintPDF',
			'FldEng' => 'Complaint PDF',
			'FldDesc' => 'Indicates whether or not the designated Police Department provide a PDF of their paper Complaint form online. This URL is very important for providing Complainants with easy access to the form they might be required to fill out for an investigation to begin.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1043,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'Facebook',
			'FldEng' => 'Facebook',
			'FldDesc' => 'This is the URL address of a Agency\'s Facebook page. If available, this will be included in each Agency\'s OPC page so that members of public may have another way to voice their complements or concerns with the department.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1044,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'UniqueStr',
			'FldEng' => 'Unique String',
			'FldDesc' => 'This unique, randomly generated string can be important for creating custom URLs which are more secure than using the Complaint ID#.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldUnique' => '1',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1045,
			'FldDatabase' => '1',
			'FldTable' => '119',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'StoredFile',
			'FldEng' => 'Stored File Name',
			'FldDesc' => 'The name of the file uploaded to Evidence, as it is stored on the server. Allows software to find the file under a unique file name.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '30',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldUnique' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1047,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Stub',
			'FldEng' => 'URL Stub',
			'FldDesc' => 'This defines the version of the department name which is compatible and ideal to be used as part of a website URL. This is vital for creating public pages of the website which are intuitive and professional.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1048,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'Slug',
			'FldEng' => 'URL Slug',
			'FldDesc' => 'This defines the version of the Complaint\'s Social Media Headline which is compatible and ideal to be used as part of a website URL. This is vital for creating public pages of the website which are intuitive and professional.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '255',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1049,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubPaperMail',
			'FldEng' => 'Way to Submit: Paper Form Mail',
			'FldDesc' => 'This flags that the designated Police Department currently accepts complaints when submitted on their paper form by mail, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1050,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '32',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubOnline',
			'FldEng' => 'Way to Submit: Online Form',
			'FldDesc' => 'This flags that the designated Police Department currently accepts complaints when submitted via an online form, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1051,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '30',
			'FldSpecSource' => '0',
			'FldName' => 'OfficialFormNotReq',
			'FldEng' => 'Official Form Not Required',
			'FldDesc' => 'This flags that the designated Police Department requires their own paper form to investigate, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1052,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '36',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubPaperInPerson',
			'FldEng' => 'Way to Submit: Requires In-Person Paper Form',
			'FldDesc' => 'This flags that the designated Police Department currently accepts complaints when submitted on their paper form in-person, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1054,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubVerbalPhone',
			'FldEng' => 'Way to Submit: Verbal Phone',
			'FldDesc' => 'This flags that the designated Police Department currently accepts complaints when submitted verbally over the phone, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1055,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '33',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubEmail',
			'FldEng' => 'Way to Submit: Email',
			'FldDesc' => 'This flags that the designated Police Department currently accepts complaints when submitted via email, important for rating Departments.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1056,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'IsCompliment',
			'FldEng' => 'Is Compliment?',
			'FldDesc' => 'This flags whether or not a Complaint record is really a Compliment. This is vital for categorizing these submissions, and defining the user experience moving forward through the process.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1057,
			'FldDatabase' => '1',
			'FldTable' => '147',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Reason',
			'FldEng' => 'Reason Officer Gave for Stop?',
			'FldDesc' => 'The stated or non-stated Officer explanations to Civilians for a Stop or detention. This table is important for associating multiple reasons given for a single Stop.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Reason for Vehicle Stop',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1058,
			'FldDatabase' => '1',
			'FldTable' => '147',
			'FldSpecSource' => '0',
			'FldName' => 'StopID',
			'FldEng' => 'Stop ID',
			'FldDesc' => 'The unique number of the Stop record related to this Stop Reason. Vital for associating multiple Stop Reasons with a single Stop during an Incident.',
			'FldForeignTable' => '121',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Non,Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1059,
			'FldDatabase' => '1',
			'FldTable' => '148',
			'FldOrd' => '1000',
			'FldSpecSource' => '0',
			'FldName' => 'ForceID',
			'FldEng' => 'Force ID',
			'FldDesc' => 'The unique number of the Force record related to further type of force details. Vital for associating multiple secondary types of force used with a single Use of Force during an Incident.',
			'FldForeignTable' => '116',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1060,
			'FldDatabase' => '1',
			'FldTable' => '148',
			'FldOrd' => '1000',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Secondary Force Type',
			'FldDesc' => 'This provides greater detail on the type of force used in this instance. The options vary between Force types Control Hold, Body Weapon, or Takedown.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Force Type - Control Hold',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1061,
			'FldDatabase' => '1',
			'FldTable' => '149',
			'FldSpecSource' => '0',
			'FldName' => 'ForceID',
			'FldEng' => 'Force ID',
			'FldDesc' => 'The unique number of the Use of Force record which this Body Part helps describe. Vital for associating multiple Body Parts with a single Use of Force during an Incident.',
			'FldForeignTable' => '116',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1062,
			'FldDatabase' => '1',
			'FldTable' => '149',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'InjuryID',
			'FldEng' => 'Injury ID',
			'FldDesc' => 'The unique number of the Injury record which this Body Part helps describe. Vital for associating multiple Body Parts with a single type of Injury ocurring during an Incident.',
			'FldForeignTable' => '117',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1063,
			'FldDatabase' => '1',
			'FldTable' => '149',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Part',
			'FldEng' => 'Body Part',
			'FldDesc' => 'This describes which part of the body Force was used upon or where Injuries happened. This is important for providing investigators documentation regarding Civilian health.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Body Part',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1064,
			'FldDatabase' => '1',
			'FldTable' => '150',
			'FldSpecSource' => '0',
			'FldName' => 'SearchID',
			'FldEng' => 'Search ID',
			'FldDesc' => 'The unique number of the Search record related to this Search Contraband found. Vital for associating multiple Search Contraband items with a single Search during an Incident.',
			'FldForeignTable' => '122',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1065,
			'FldDatabase' => '1',
			'FldTable' => '150',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Contraband Types',
			'FldDesc' => 'Categories of illegal items discovered during a Search. Important for identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Contraband Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1066,
			'FldDatabase' => '1',
			'FldTable' => '151',
			'FldSpecSource' => '0',
			'FldName' => 'SearchID',
			'FldEng' => 'Search ID',
			'FldDesc' => 'The unique number of the Search record related to this Search Seizure. Vital for associating multiple Search Seizures items with a single Search during an Incident.',
			'FldForeignTable' => '122',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1067,
			'FldDatabase' => '1',
			'FldTable' => '151',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Seized Property Type',
			'FldDesc' => 'Categories of items Seized discovered during a Search. Important for identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Def::Property Seized Types',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1068,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'PersonID',
			'FldEng' => 'Person Contact Info ID',
			'FldDesc' => 'The primary Person Contact record number connected to a Civilian\'s record. Important for linking name and basic contact information to a Civilian.',
			'FldForeignTable' => '154',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1069,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'PersonID',
			'FldEng' => 'Person Contact Info ID',
			'FldDesc' => 'The primary Person Contact record number connected to a Officer\'s record. Important for linking name and basic contact information to an Officer.',
			'FldForeignTable' => '154',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1070,
			'FldDatabase' => '1',
			'FldTable' => '108',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'PersonID',
			'FldEng' => 'Person Contact Info ID',
			'FldDesc' => 'The primary Person Contact record number connected to a Administrator\'s record. Important for linking name and basic contact information to a Administrator.',
			'FldForeignTable' => '154',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1071,
			'FldDatabase' => '1',
			'FldTable' => '110',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'PersonID',
			'FldEng' => 'Person Contact Info ID',
			'FldDesc' => 'The primary Person Contact record number connected to a Customer\'s record. Important for linking name and basic contact information to a Customer.',
			'FldForeignTable' => '154',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1073,
			'FldDatabase' => '1',
			'FldTable' => '155',
			'FldSpecSource' => '0',
			'FldName' => 'OffID',
			'FldEng' => 'Officer ID',
			'FldDesc' => 'The unique number of the Officer record being linked in this record. Vital for associating Officers with the Vehicle.',
			'FldForeignTable' => '104',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1074,
			'FldDatabase' => '1',
			'FldTable' => '155',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'VehicID',
			'FldEng' => 'Vehicle ID',
			'FldDesc' => 'The unique number of the Vehicle record being linked in this record. Vital for associating Civilians or Officers with the Vehicle.',
			'FldForeignTable' => '152',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1076,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'IPaddy',
			'FldEng' => 'IP Address (encrypted)',
			'FldDesc' => 'This logs an encrypted copy of the Complainants IP Address. This is important for checking if multiple Complaints were submitted from the same location, especially when filtering Complaints categorized as spam or abuse.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1077,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'GivePhysDesc',
			'FldEng' => 'Would you like to provide a physical description?',
			'FldDesc' => 'Indicates that the Complainant has chosen to submit a physical description of this Civilian. This information helps the software provide the correct form fields to the Complainant.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1078,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'Resident',
			'FldEng' => 'Resident of Department Jurisdiction',
			'FldDesc' => 'Indicates whether or not a Victim was a resident of the police Department\'s jurisdiction, at the time of the incident. This information could help inform race-based allegations.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1079,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'CitationNumber',
			'FldEng' => 'Citation ID#',
			'FldDesc' => 'Citation ID Number issued to a Subject. Important for tracking down more information during investigations.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '25',
			'FldCharSupport' => ',Letters,Numbers,',
			'FldCompareSame' => '878800',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1080,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'Twitter',
			'FldEng' => 'Twitter',
			'FldDesc' => 'This is the URL address of a Agency\'s Twitter page. If available, this will be included in each Agency\'s OPC page so that members of public may have another way to voice their complements or concerns with the department.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1081,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '31',
			'FldSpecSource' => '0',
			'FldName' => 'OfficialAnon',
			'FldEng' => 'Anonymous Complaints Investigated',
			'FldDesc' => 'This flags that the designated Police Department does accept -- and will investigate -- complaints which are submitted anonymously. This is important for department ratings and OPC compatibility.

',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1082,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'GivePhysDesc',
			'FldEng' => 'Would you like to provide a physical description?',
			'FldDesc' => 'Indicates that the Complainant has chosen to submit a physical description of this Officer. This information helps the software provide the correct form fields to the Complainant.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1083,
			'FldDatabase' => '1',
			'FldTable' => '138',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestID',
			'FldEng' => 'Arrest ID',
			'FldDesc' => 'The unique number of the Arrest record related to this Arrest Charge.',
			'FldForeignTable' => '123',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1084,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'GivenCitation',
			'FldEng' => 'Given Citation (not arrested)',
			'FldDesc' => 'Indicates whether or not this Subject was given a Citation with Charges as a result of this Stop.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1085,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'GivenWarning',
			'FldEng' => 'Given Written Warning',
			'FldDesc' => 'Indicates whether or not this Subject was only given a Warning as a result of this Stop.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1086,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'ChargesOther',
			'FldEng' => 'Citation Charges: Other (not in list)',
			'FldDesc' => 'Citation charge (or charges) an Officer issued a Subject as a result of this Stop. Important for evaluating wrongful citation Allegations and tracking citation trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1087,
			'FldDatabase' => '1',
			'FldTable' => '145',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'StillNoResponse',
			'FldEng' => 'Still No Response by Oversight',
			'FldDesc' => 'Indicates date and time when a Complainant last confirmed that they have heard no response from the appropriate Oversight Agency. This is essential for tracking an Oversight Agency\'s response time when acknowledging receipt of OPC-submitted Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldType' => 'DATETIME',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '6'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1088,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'StopSubjectHandcuffInjYN',
			'FldEng' => 'Did the Subject Have Injuries from Handcuffs?',
			'FldDesc' => 'Indicates whether or not the Subject reported any Injuries related to an Officer\'s misuse of handcuffs. Important for connecting with possible Use of Force.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1089,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '37',
			'FldSpecSource' => '0',
			'FldName' => 'WaySubNotary',
			'FldEng' => 'Way to Submit: Requires Notary',
			'FldDesc' => 'This flags that the designated Police Department currently requires complaints to be submitted with a notary.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1090,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'CivModel',
			'FldEng' => 'Civilian Oversight Model',
			'FldDesc' => 'Indicates subcategory of Civilian Oversight Agency, either Investigative, Review, or Audit. This information is essential for determining scope of a given Oversight Agency.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Civilian Oversight Models',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1091,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldSpecSource' => '0',
			'FldName' => 'ComplaintID',
			'FldEng' => 'Complaint ID',
			'FldDesc' => 'The unique number of the Complaint record related to this record of Allegation-related responses, vital to associating with all other Complaint data.',
			'FldForeignTable' => '112',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1092,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'StopYN',
			'FldEng' => 'Did an officer stop or detain anyone during this incident?',
			'FldDesc' => 'Indicates whether or not an Officer detained anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1093,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'StopWrongful',
			'FldEng' => 'Do do you believe anybody was stopped wrongfully?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful stop of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1094,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerID',
			'FldEng' => 'Did anybody ask for an officer\'s identification?',
			'FldDesc' => 'Indicates whether or not anybody asked for any Officer\'s identification. Storing this is important in determining whether or not to display the question regarding an Officer\'s refusal.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1095,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerRefuseID',
			'FldEng' => 'Did an officer refuse to provide identification?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is a potential Allegation regarding an Officer refusing to provide identification. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1096,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'SearchYN',
			'FldEng' => 'Did an officer search anyone during this incident?',
			'FldDesc' => 'Indicates whether or not an Officer searched anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1097,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'SearchWrongful',
			'FldEng' => 'Do do you believe anybody was searched wrongfully?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful search of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1098,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'PropertyYN',
			'FldEng' => 'Was any property seized or damaged?',
			'FldDesc' => 'Indicates whether or not an Officer seized or damaged any property during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1099,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'PropertyWrongful',
			'FldEng' => 'Do you believe this property was wrongfully seized or damaged?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful seizure or destruction of at least one Civilian\'s property. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1100,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'ForceYN',
			'FldEng' => 'Did an officer use physical force against anyone during this incident?',
			'FldDesc' => 'Indicates whether or not an Officer used physical force against anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1101,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'ForceUnreason',
			'FldEng' => 'Do you believe the use of physical force on someone was unreasonable?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the unreasonable use of force against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1102,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestYN',
			'FldEng' => 'Did an officer arrest anyone during this incident?',
			'FldDesc' => 'Indicates whether or not an Officer arrested anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1103,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '12',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestWrongful',
			'FldEng' => 'Do do you believe anybody was arrested wrongfully?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful arrest of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1104,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestMiranda',
			'FldEng' => 'Did the officer fail to read any arrestees their Miranda rights?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding a failure to read Miranda rights during at least one Arrest. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1105,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'CitationYN',
			'FldEng' => 'Did anyone get a ticket or citation?',
			'FldDesc' => 'Indicates whether or not an Officer cited anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1106,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'ArrestRetaliatory',
			'FldEng' => 'Do you believe the charges filed against anyone were retaliatory?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding retaliatory charges against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1107,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'Procedure',
			'FldEng' => 'Do you believe an officer took actions which did not follow appropriate policy or procedure?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding Officer actions which did not follow appropriate policy or procedure. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1108,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'SexualAssault',
			'FldEng' => 'Did an officer sexually assault someone during the incident?',
			'FldDesc' => 'Indicates whether or not an Officer sexually assaulted anyone during the Incident. This is important for later reloading Complaint forms for silver Allegations with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1109,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'Bias',
			'FldEng' => 'Do you believe the officer was policing based on bias?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding policing based on bias. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1110,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'Retaliation',
			'FldEng' => 'Do you believe any officers used force or made arrests as an act of retaliation?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding retaliatory arrests against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1111,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'Unbecoming',
			'FldEng' => 'Do you believe an officer\'s conduct was improper or unbecoming?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding conduct unbecoming of an Officer. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1112,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'Discourteous',
			'FldEng' => 'Was an officer discourteous in ways not included in other allegations?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding at least one Officer\'s discourtesy. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1113,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '34',
			'FldSpecSource' => '0',
			'FldName' => 'HoneyPot',
			'FldEng' => 'Honey Pot (to catch spam bots)',
			'FldDesc' => 'Indicates whether or not a spam bot filled in the form field which human users cannot see. This is important for quickly categorizing Complaints as spam.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',',
			'FldKeyType' => ',',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1114,
			'FldDatabase' => '1',
			'FldTable' => '153',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'GenderOther',
			'FldEng' => 'Gender Other',
			'FldDesc' => 'Other gender classifications of a Civilian or Officer, with suggestions provided by the Definitions for Gender Identity. This category is used to help verify a Civilian or Officer\'s identity.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1115,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerInjured',
			'FldEng' => 'Was an officer injured?',
			'FldDesc' => 'Indicates whether or not any Officer was also injured during a specific Use of Force. This is important for tracking an acknowledging the fact that there is more than one side to every story.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1116,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'OfficerInjuredDesc',
			'FldEng' => 'Officer injury descriptions',
			'FldDesc' => 'Further describes Officers\' injuries incurred during a specific Use of Force. This is important for tracking an acknowledging the fact that there is more than one side to every story.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1117,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'NeglectDuty',
			'FldEng' => 'Do you believe an officer failed to take actions which did not follow appropriate procedure?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding Officer inactions which did not follow appropriate policy or procedure. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1118,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'TriedOtherWays',
			'FldEng' => 'Did you try to submit your complaint some other way before using OPC?',
			'FldDesc' => 'Indicates whether or not the Complainant previously attempted to formally submit their police complaint before using OPC. This is important for research about the use of OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1119,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '14',
			'FldSpecSource' => '0',
			'FldName' => 'TriedOtherWaysDesc',
			'FldEng' => 'Describe what else you\'ve tried:',
			'FldDesc' => 'The Complainant can describe how else they previously attempted to formally submit their police complaint before using OPC. This is important for research about the use of OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1120,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '21',
			'FldSpecSource' => '0',
			'FldName' => 'LegalAidHelp',
			'FldEng' => 'Do you want to share your name and complaint details with local rights advocacy groups?',
			'FldDesc' => 'Indicates whether or not the Complainant wants OPC to share their details with local rights advocacy groups. This is important for maximizing how much help OPC can try to provide Victims of alleged police misconduct.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldRequired' => '1',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1121,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'HowHear',
			'FldEng' => 'How did you hear about us?',
			'FldDesc' => 'Indicates how the Complainant heard about Open Police Complaints. This is important for internal understanding of OPC marketing strategies.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1122,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '15',
			'FldSpecSource' => '0',
			'FldName' => 'AttorneyHas',
			'FldEng' => 'Are you already represented by an attorney in this matter?',
			'FldDesc' => 'Indicates whether or not the Complainant is already represented by an attorney. This is important for understanding the incident\'s legal situation and as a safety check to minimize risks.',
			'FldNotes' => 'eg. http://www.aclupa.org/our-work/legal/fileacomplaint/electronic-complaint-form/',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldRequired' => '1',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1123,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'AttorneyWant',
			'FldEng' => 'Do you want an attorney?',
			'FldDesc' => 'Indicates whether or not the Complainant would like an attorney. This is important for understanding the incident\'s legal situation and as a safety check to minimize potential risks of using OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1124,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'AllChargesResolved',
			'FldEng' => 'Have ALL of these charges been resolved?',
			'FldDesc' => 'Indicates whether or not all criminal charges have been resolved. This is important for understanding the Incident\'s legal situation and as a safety check to minimize potential risks of using OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1125,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'UnresolvedChargesActions',
			'FldEng' => 'There are unresolved charges, but I still want to use OPC now...',
			'FldDesc' => 'Indicates whether or not the Complainant has explicitly chosen to use OPC despite legal situations related to the Incident. This is important for understanding the incident\'s legal situation and as a safety check to minimize potential risks of using OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Unresolved Charges Actions',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '3',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1126,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'HadVehicle',
			'FldEng' => 'Using a vehicle at the start of the incident?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about the vehicle this Civilian was in. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1127,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'HadVehicle',
			'FldEng' => 'Using a vehicle at the start of the incident?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about the vehicle this Officer was in. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1128,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'GiveName',
			'FldEng' => 'Do you know their name, badge number or similar information?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about the name and/or badge number(s) of this Officer. This is important for reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1129,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '6',
			'FldSpecSource' => '0',
			'FldName' => 'GiveName',
			'FldEng' => 'Do you know their name?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about the name of this Civilian. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1130,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '7',
			'FldSpecSource' => '0',
			'FldName' => 'GiveContactInfo',
			'FldEng' => 'Do you know any of their contact information?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide any contact information for this Civilian. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1131,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '22',
			'FldSpecSource' => '0',
			'FldName' => 'GovtInvestigation',
			'FldEng' => 'Want to use a government investigation agency?',
			'FldDesc' => 'Indicates whether or not the Complainant wants OPC to share their details with a government investigation agency. This is important for maximizing the help OPC can provide to Victims of alleged police misconduct.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1132,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'GovtInvestigationWhyNot',
			'FldEng' => 'Why not use government investigation agency.',
			'FldDesc' => 'Indicates why the Complainant does not want OPC to share their details with a government investigation agency. This is important for understanding how OPC can better help Victims of alleged police misconduct.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1133,
			'FldDatabase' => '1',
			'FldTable' => '157',
			'FldSpecSource' => '0',
			'FldName' => 'CivID',
			'FldEng' => 'Civilian ID',
			'FldDesc' => 'This helps to link one Civilian to one Allegation, via the Civilian\'s primary ID.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1134,
			'FldDatabase' => '1',
			'FldTable' => '157',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'AlleID',
			'FldEng' => 'Allegation ID',
			'FldDesc' => 'This helps to link one Civilian to one Allegation, via the Allegation\'s primary ID.',
			'FldForeignTable' => '113',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1135,
			'FldDatabase' => '1',
			'FldTable' => '158',
			'FldSpecSource' => '0',
			'FldName' => 'OffID',
			'FldEng' => 'Officer ID',
			'FldDesc' => 'This helps to link one Officer to one Allegation, via the Officer\'s primary ID.',
			'FldForeignTable' => '104',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1136,
			'FldDatabase' => '1',
			'FldTable' => '158',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'AlleID',
			'FldEng' => 'Allegation ID',
			'FldDesc' => 'This helps to link one Officer to one Allegation, via the Allegation\'s primary ID.',
			'FldForeignTable' => '113',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1137,
			'FldDatabase' => '1',
			'FldTable' => '159',
			'FldSpecSource' => '0',
			'FldName' => 'OffID',
			'FldEng' => 'Officer ID',
			'FldDesc' => 'This helps to link one Officer to one verbal Order, via the Officer\'s primary ID.',
			'FldForeignTable' => '104',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1138,
			'FldDatabase' => '1',
			'FldTable' => '159',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'OrdID',
			'FldEng' => 'Order ID',
			'FldDesc' => 'This helps to link one Officer to one verbal Order given, via the Order\'s primary ID.',
			'FldForeignTable' => '120',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1139,
			'FldDatabase' => '1',
			'FldTable' => '160',
			'FldSpecSource' => '0',
			'FldName' => 'OffID',
			'FldEng' => 'Officer ID',
			'FldDesc' => 'This helps to link one Officer to one Event (which represents one Stop, Search, Use of Force, or Arrest), via the Officer\'s primary ID.',
			'FldForeignTable' => '104',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1140,
			'FldDatabase' => '1',
			'FldTable' => '160',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'EveID',
			'FldEng' => 'Event ID',
			'FldDesc' => 'This helps to link one Officer to one Event (which represents one Stop, Search, Use of Force, or Arrest), via the Event\'s primary ID.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1141,
			'FldDatabase' => '1',
			'FldTable' => '161',
			'FldSpecSource' => '0',
			'FldName' => 'CivID',
			'FldEng' => 'Civilian ID',
			'FldDesc' => 'This helps to link one Civilian to one verbal Order, via the Civilian\'s primary ID.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1142,
			'FldDatabase' => '1',
			'FldTable' => '161',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'OrdID',
			'FldEng' => 'Order ID',
			'FldDesc' => 'This helps to link one Civilian to one verbal Order given, via the Order\'s primary ID.',
			'FldForeignTable' => '120',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1143,
			'FldDatabase' => '1',
			'FldTable' => '162',
			'FldSpecSource' => '0',
			'FldName' => 'CivID',
			'FldEng' => 'Civilian ID',
			'FldDesc' => 'This helps to link one Civilian to one Event (which represents one Stop, Search, Use of Force, or Arrest), via the Civilian\'s primary ID.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1144,
			'FldDatabase' => '1',
			'FldTable' => '162',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'EveID',
			'FldEng' => 'Event ID',
			'FldDesc' => 'This helps to link one Civilian to one Event (which represents one Stop, Search, Use of Force, or Arrest), via the Event\'s primary ID.',
			'FldForeignTable' => '137',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Primary,Foreign,',
			'FldKeyStruct' => 'Composite',
			'FldValuesEnteredBy' => 'System',
			'FldCompareSame' => '878800',
			'FldCompareOther' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1145,
			'FldDatabase' => '1',
			'FldTable' => '163',
			'FldSpecSource' => '0',
			'FldName' => 'CivID',
			'FldEng' => 'Civilian ID',
			'FldDesc' => 'The unique number of the Civilian record being linked in this record. Vital for associating Civilians with the Vehicle.',
			'FldForeignTable' => '102',
			'FldForeignMin' => '0',
			'FldForeign2Min' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1146,
			'FldDatabase' => '1',
			'FldTable' => '163',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'VehicID',
			'FldEng' => 'Vehicle ID',
			'FldDesc' => 'The unique number of the Vehicle record being linked in this record. Vital for associating Civilians with the Vehicle.',
			'FldForeignTable' => '152',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1147,
			'FldDatabase' => '1',
			'FldTable' => '163',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Role',
			'FldEng' => 'Vehicle Role',
			'FldDesc' => 'When a Vehicle is associated with multiple Civilians, this information is important for identifier for which person was driving a Vehicle.',
			'FldForeignTable' => '0',
			'FldForeignMin' => 'N',
			'FldForeignMax' => 'N',
			'FldForeign2Min' => 'N',
			'FldForeign2Max' => 'N',
			'FldValues' => 'Driver;Passenger',
			'FldDataLength' => '10',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1148,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '4',
			'FldSpecSource' => '0',
			'FldName' => 'TreeVersion',
			'FldEng' => 'Tree Version',
			'FldDesc' => 'Indicates which precise version number of this software was running at the time of this Complaint\'s submission. This is important for internal use, quality control, and potential debugging.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '54925',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1149,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '5',
			'FldSpecSource' => '0',
			'FldName' => 'ABtests',
			'FldEng' => 'AB Tests',
			'FldDesc' => 'Indicates which combination of AB Tests have been selected for this Complaint. This is important for determining and tracking what the user sees during the process.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '54925',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1150,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'AttorneyOKedOPC',
			'FldEng' => 'Attorney said complainant could use Open Police Complaints?',
			'FldDesc' => 'Indicates whether or not the Complainant\'s attorney explicitly approved their use of Open Police Complaints. This is an important safety check to minimize potential risks of using OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '54925'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1151,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '18',
			'FldSpecSource' => '0',
			'FldName' => 'AnyoneCharged',
			'FldEng' => 'Is anyone involved in this event now under arrest, OR has anyone been charged with a crime?',
			'FldDesc' => 'Indicates whether or not any Civilians were arrested or charged with a crime. This is important for understanding the Incident\'s legal situation and as a safety check to minimize potential risks of using OPC.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldRequired' => '1',
			'FldCompareSame' => '54925'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1152,
			'FldDatabase' => '1',
			'FldTable' => '102',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'InPreviousVehicle',
			'FldEng' => 'Have you already described this vehicle?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about a vehicle not previously described in this Complaint. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1153,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'InPreviousVehicle',
			'FldEng' => 'Have you already described this vehicle?',
			'FldDesc' => 'Indicates whether or not the Complainant intends to provide information about a vehicle not previously described in this Complaint. This is important for later reloading Complaint forms with the user\'s previous response.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1154,
			'FldDatabase' => '1',
			'FldTable' => '137',
			'FldOrd' => '2',
			'FldSpecSource' => '0',
			'FldName' => 'Type',
			'FldEng' => 'Event Type',
			'FldDesc' => 'Indicates whether this record is the type of Event representing a Stop, Search, Use of Force, or Arrest. This is important for determining how to handle this Event throughout the system.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Stops;Searches;Force;Arrests',
			'FldDataLength' => '0',
			'FldCharSupport' => ',',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1155,
			'FldDatabase' => '1',
			'FldTable' => '137',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'UserFinished',
			'FldEng' => 'User Finished Event',
			'FldDesc' => 'Internally indicates whether or not the Complainant completed the final questions related to a Stop, Search, Use of Force, or Arrest. This is important for determining when the Complainant has completed all dynamically generated sections describing \'What Happened\'.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N',
			'FldDefault' => 'N',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,',
			'FldCompareSame' => '878800',
			'FldOpts' => '13'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1156,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '23',
			'FldSpecSource' => '0',
			'FldName' => 'AllegWrongfulStop',
			'FldEng' => 'Do you believe they were wrongfully stopped or questioned?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful stop of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1157,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '24',
			'FldSpecSource' => '0',
			'FldName' => 'AllegWrongfulEntry',
			'FldEng' => 'Did an officer enter anyway without a warrant?',
			'FldDesc' => 'Indicates whether or not an Officer entered a space without a warrant. This is important for determining the details of justified entry on private property.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1158,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '19',
			'FldSpecSource' => '0',
			'FldName' => 'AllegWrongfulSearch',
			'FldEng' => ' Do you believe they were wrongfully searched?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful search of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1159,
			'FldDatabase' => '1',
			'FldTable' => '122',
			'FldOrd' => '20',
			'FldSpecSource' => '0',
			'FldName' => 'AllegWrongfulProperty',
			'FldEng' => 'Do you believe this property was wrongfully seized or damaged?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful seizure or destruction of at least one Civilian\'s property. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1160,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'AllegUnreasonable',
			'FldEng' => 'Do you believe this use of force was unreasonable?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful use of force against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1161,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'AllegWrongfulArrest',
			'FldEng' => 'Do do you believe they were wrongfully arrested?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding the wrongful arrest of at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1162,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'AllegRetaliatoryCharges',
			'FldEng' => 'Do you believe the charges were retaliatory?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding retaliatory arrest charges against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1163,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'ChargesFiled',
			'FldEng' => 'Were any charges filed?',
			'FldDesc' => 'Indicates whether or not any charges were filed as a part of this specific Arrest. This is important for determining the risk involved with this Complaint, as well as revealing fields to describe the specific Charges filed.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1164,
			'FldDatabase' => '1',
			'FldTable' => '121',
			'FldOrd' => '25',
			'FldSpecSource' => '0',
			'FldName' => 'AllegRetaliatoryCharges',
			'FldEng' => 'Do you believe the charges were retaliatory?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding retaliatory citation charges against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1165,
			'FldDatabase' => '1',
			'FldTable' => '156',
			'FldOrd' => '16',
			'FldSpecSource' => '0',
			'FldName' => 'CitationExcessive',
			'FldEng' => 'Do you believe the citations filed against anyone were excessive?',
			'FldDesc' => 'Indicates whether or not the Complainant believes there is an Allegation regarding retaliatory citation charges against at least one Civilian. Such Allegation claims are central to Complaints.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1166,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '8',
			'FldSpecSource' => '0',
			'FldName' => 'Strip',
			'FldEng' => 'Strip Searched?',
			'FldDesc' => 'Indicates whether or not an Officer performed a strip search on a Subject. Important for evaluating possible wrongful search Allegation and identifying search trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1167,
			'FldDatabase' => '1',
			'FldTable' => '123',
			'FldOrd' => '9',
			'FldSpecSource' => '0',
			'FldName' => 'StripSearchDesc',
			'FldEng' => 'Strip Search Description',
			'FldDesc' => 'Narrative details about the nature of the strip search. Important for identifying particularly egregious wrongful search Allegations -- including cavity searches. ',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1168,
			'FldDatabase' => '1',
			'FldTable' => '164',
			'FldSpecSource' => '0',
			'FldName' => 'PhysDescID',
			'FldEng' => 'Physical Description ID',
			'FldDesc' => 'The primary Physical Description record number connected to this race association. Important for multiple races to a single Civilian or Officer.',
			'FldForeignTable' => '153',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1169,
			'FldDatabase' => '1',
			'FldTable' => '164',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Race',
			'FldEng' => 'Race',
			'FldDesc' => 'The Complainant-selected or self-ascribed racial classification of a Civilian or Officer. This classification helps verify the identity of Subject of Complaints and is useful for determining possible patterns or practices of race-based policing.',
			'FldNotes' => 'Depending on who is selecting, this might be self-ascribed or Complainant-selected for another Civilian. We will use the Census Bureau\'s classifications: http://www.census.gov/topics/population/race/about.html',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Races',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1170,
			'FldDatabase' => '1',
			'FldTable' => '111',
			'FldOrd' => '3',
			'FldSpecSource' => '0',
			'FldName' => 'Status',
			'FldEng' => 'Activity Status',
			'FldDesc' => 'The current activity status of the Department, 1 for active, 0 for inactive. This vital for identifying Departments which have been closed since the creation of the original data set.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1171,
			'FldDatabase' => '1',
			'FldTable' => '115',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'IsVehicle',
			'FldEng' => 'Did this incident begin with a vehicle stop?',
			'FldDesc' => 'Whether or not an Incident began with a vehicle, which includes cars, motorcycles, bicycles, and boats. This provides important contextual information about the the nature of the Incident to better evaluate the Incident and Allegations.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1172,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'YouTube',
			'FldEng' => 'YouTube URL',
			'FldDesc' => 'This is the URL address of a Agency\'s YouTube page. If available, this will be included in each Agency\'s OPC page so that members of public see this aspect of the department\'s web presence.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Numbers,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1173,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '10',
			'FldSpecSource' => '0',
			'FldName' => 'Chase',
			'FldEng' => 'At any point, was the Subject chased by the police?',
			'FldDesc' => 'Indicates whether or not Subject was chased by an Officer. Important for evaluating Allegations of Excessive Force and tracking Force trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1174,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldOrd' => '11',
			'FldSpecSource' => '0',
			'FldName' => 'ChaseType',
			'FldEng' => 'What kind of chase was it?',
			'FldDesc' => 'Indicates whether the Subject\'s chase took place on foot, in vehicles, or both. Important for evaluating Allegations of Excessive Force and tracking Force trends.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1175,
			'FldDatabase' => '1',
			'FldTable' => '152',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'Unmarked',
			'FldEng' => 'Was the vehicle unmarked or undercover?',
			'FldDesc' => 'Indicates whether or not an Officer\'s vehicle was an unmarked car, meaning it looks like a normal vehicle with no badges, graphics, or visible police lights. This is important for tracking trends of Officer behavior.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1176,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '17',
			'FldSpecSource' => '0',
			'FldName' => 'Uniform',
			'FldEng' => 'Was this officer wearing a uniform?',
			'FldDesc' => 'Indicates whether or not Officer was wearing a uniform during the Incident. Particularly important for investigating Allegations against Officers in plain clothes.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1177,
			'FldDatabase' => '1',
			'FldTable' => '112',
			'FldOrd' => '35',
			'FldSpecSource' => '0',
			'FldName' => 'IsMobile',
			'FldEng' => 'Using Mobile Device?',
			'FldDesc' => 'Indicates whether or not this Complaint was started on a mobile device. This is important for tracking trends of usage, and potential debugging.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => '0;1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1178,
			'FldDatabase' => '1',
			'FldTable' => '165',
			'FldSpecSource' => '0',
			'FldName' => 'ForceID',
			'FldEng' => 'Force ID',
			'FldDesc' => 'The unique number of the Force record related to further type of force details. Vital for associating multiple secondary types of force used with a single Use of Force during an Incident.',
			'FldForeignTable' => '116',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1179,
			'FldDatabase' => '1',
			'FldTable' => '165',
			'FldOrd' => '1',
			'FldSpecSource' => '0',
			'FldName' => 'BodyWeapon',
			'FldEng' => 'Civilian Body Weapon',
			'FldDesc' => 'The Definition ID number of the type of Body Weapon used by the Civilian against the Officer. Vital for associating multiple Body Weapons with a single Use of Force during an Incident.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1180,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldSpecSource' => '0',
			'FldName' => 'VictimHadWeapon',
			'FldEng' => 'Victim Had A Weapon',
			'FldDesc' => 'Indicates whether or not the Victim of this Use of Force seemed to have a weapon at the time of the Incident. This is important for determining if the Officer used Unreasonable Force.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Y;N;?',
			'FldDataLength' => '1',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1181,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldSpecSource' => '0',
			'FldName' => 'VictimWhatWeapon',
			'FldEng' => 'What type of Victim weapon?',
			'FldDesc' => 'Indicates what type of weapon the Victim of this Use of Force seemed to have at the time of the Incident. This is important for determining if the Officer used Unreasonable Force.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Civilian Weapons',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1182,
			'FldDatabase' => '1',
			'FldTable' => '116',
			'FldSpecSource' => '0',
			'FldName' => 'VictimUseWeapon',
			'FldEng' => 'Did the victim use the weapon at all?',
			'FldDesc' => 'Indicates how the Victim used a weapon during this Use of Force. This is important for determining if the Officer used Unreasonable Force.',
			'FldForeignTable' => '0',
			'FldForeignMin' => '0',
			'FldForeignMax' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Def::Intimidating Displays Of Weapon',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Numbers,',
			'FldCompareSame' => '878800'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1219,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '5',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '834',
			'FldName' => 'NamePrefix',
			'FldEng' => 'Name Prefix',
			'FldDesc' => 'Letters placed before a person\'s first name that we use in all formal communications with persons or regarding Complaints.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1220,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '830',
			'FldName' => 'NameFirst',
			'FldEng' => 'First Name',
			'FldDesc' => 'The legal given name of persons that we use in all formal communications with persons or regarding Complaints.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1221,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '8',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '832',
			'FldName' => 'NameMiddle',
			'FldEng' => 'Middle Name',
			'FldDesc' => 'The name of a person, placed between their first name and before their surname, that we use in all formal communications with persons or regarding Complaints.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1222,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '835',
			'FldName' => 'NameLast',
			'FldEng' => 'Last Name',
			'FldDesc' => 'The legal surname of persons that we use in formal communications with or regarding Complaints.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1223,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '833',
			'FldName' => 'NameSuffix',
			'FldEng' => 'Name Suffix',
			'FldDesc' => 'Letters added after a person\'s last name related to this record -- which provide additional information about their title or inherited name -- that we use in all formal communications with persons or regarding Complaints.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1233,
			'FldDatabase' => '1',
			'FldTable' => '154',
			'FldOrd' => '20',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '846',
			'FldName' => 'Birthday',
			'FldEng' => 'Date of Birth',
			'FldDesc' => 'The month, day, and year a person was born. This information is used to help verify a person\'s identity.',
			'FldNotes' => 'If Date of Birth is unknown, the "Age" field will become visible, which offers age ranges to be selected.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'DATE',
			'FldDataType' => 'DateTime',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Keyboard,Numbers,',
			'FldInputMask' => 'YYYY-MM-DD',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldCompareOther' => '6',
			'FldCompareValue' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1265,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '6',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '834',
			'FldName' => 'NamePrefix',
			'FldEng' => 'Name Prefix',
			'FldDesc' => 'Letters placed before an Oversight Agency contact\'s first name that we use in all formal communications with Oversight Agency contacts or regarding Oversight Agency contacts.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1266,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '7',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '830',
			'FldName' => 'NameFirst',
			'FldEng' => 'First Name',
			'FldDesc' => 'The legal given name of an Oversight Agency contact that we use to identify them. We also use this in all formal communications with Oversight Agency contacts and regarding Oversight Agency contacts.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1267,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '9',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '832',
			'FldName' => 'NameMiddle',
			'FldEng' => 'Middle Name',
			'FldDesc' => 'The name of an Oversight Agency contact, placed between their first name and before their surname, that we use in all formal communications with Oversight Agency contacts or regarding Oversight Agency contacts.',
			'FldNotes' => 'Use only if selected. Field may otherwise be left blank',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '100',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1268,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '10',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '835',
			'FldName' => 'NameLast',
			'FldEng' => 'Last Name',
			'FldDesc' => 'The legal surname of an Oversight Agency contact that we use in formal communications with or regarding an Oversight Agency contact.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1269,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '833',
			'FldName' => 'NameSuffix',
			'FldEng' => 'Name Suffix',
			'FldDesc' => 'Letters added after an Oversight Agency contact\'s last name -- which provide additional information about their title or inherited name -- that we use in all formal communications with Oversight Agency contacts or regarding Oversight Agency contacts.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '20',
			'FldCharSupport' => ',Letters,Keyboard,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1336,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '13',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '955',
			'FldName' => 'OfficerRank',
			'FldEng' => 'Officer Rank',
			'FldDesc' => 'This indicates an Officer\'s position within the Department. This information might help us verify an Officer\'s identity.',
			'FldNotes' => 'Option list from Philly PD, adapt as needed.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldValues' => 'Police Officer;Detective;Corporal;Sergeant;Lieutenant;Captain;Staff Inspector;Inspector;Chief Inspector;Deputy Commissioner;Commissioner;?',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1338,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '965',
			'FldName' => 'IDnumber',
			'FldEng' => 'Additional ID#',
			'FldDesc' => 'A secondary number that Departments assign to Officers, which stays consistent over time. This information might help us verify an Officer\'s identity.',
			'FldNotes' => 'Eg. in New York, officers have a consistent Tax ID. This might help us track Officers who obtain a new rank, or move to a different precinct or district.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1339,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '11',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '956',
			'FldName' => 'BadgeNumber',
			'FldEng' => 'Badge Number',
			'FldDesc' => 'An identification number Departments assign to Officers. This information might help us verify an Officer\'s identity.',
			'FldNotes' => 'We might want to tell users that they don\'t necessarily need a badge number to identify Officers',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '7'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1341,
			'FldDatabase' => '1',
			'FldTable' => '104',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '920',
			'FldName' => 'DeptID',
			'FldEng' => 'Department ID',
			'FldDesc' => 'The unique number of the Department record related to this Officer. Vital for associating this Officer with other Department data.
',
			'FldForeignTable' => '111',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1369,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '12',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '922',
			'FldName' => 'Title',
			'FldEng' => 'Title',
			'FldDesc' => 'The job position of an Oversight Agency contact. We might use this in formal communications with Oversight Agency contacts or regarding Oversight Agency contacts.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '0',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyType' => 'Non',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '130',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1370,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '13',
			'FldSpecSource' => '0',
			'FldName' => 'IDnumber',
			'FldEng' => 'ID Number',
			'FldDesc' => 'A unique number used to identify each Oversight Agency. We assign a number to all active Oversight Agencies and remains with them for the duration of their existence.',
			'FldForeignTable' => '0',
			'FldForeign2Min' => '0',
			'FldForeign2Max' => '0',
			'FldDataLength' => '50',
			'FldCharSupport' => ',Letters,Keyboard,Numbers,',
			'FldKeyStruct' => 'Simple',
			'FldCompareSame' => '6',
			'FldOpts' => '11'
		]);
		DB::table('SL_Fields')->insert([
			'FldID' => 1372,
			'FldDatabase' => '1',
			'FldTable' => '106',
			'FldOrd' => '3',
			'FldSpecType' => 'Replica',
			'FldSpecSource' => '920',
			'FldName' => 'DeptID',
			'FldEng' => 'Department ID',
			'FldDesc' => 'The unique number of the Department record related to this Oversight Agency. This information helps us identify the proper Oversight Agency with jurisdiction over an OPC Complaint directed at a specific Police Department.

',
			'FldForeignTable' => '111',
			'FldForeignMin' => '0',
			'FldForeignMax' => 'N',
			'FldIsIndex' => '1',
			'FldType' => 'INT',
			'FldDataType' => 'Numeric',
			'FldDataLength' => '11',
			'FldCharSupport' => ',Numbers,',
			'FldKeyType' => ',Foreign,',
			'FldKeyStruct' => 'Simple',
			'FldEditRule' => 'NowAllowed',
			'FldNullSupport' => '0',
			'FldRequired' => '1',
			'FldCompareSame' => '130'
		]);
		
		
		DB::table('SL_Definitions')->insert([
			'DefID' => 101,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefIsActive' => '0',
			'DefValue' => '0-15'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 102,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => '16-24'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 103,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => '25-34'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 104,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => '35-44'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 105,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => '45-54'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 106,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => '55-64'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 107,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => '65-74'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 108,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => '75-84'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 109,
			'DefDatabase' => '1',
			'DefSubset' => 'Age Ranges',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => '85+'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 110,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Findings',
			'DefIsActive' => '0',
			'DefValue' => 'Exonerated',
			'DefDescription' => '"Exonerated" means that the conduct at issue occurred but is not a violation of department rules.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 111,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Findings',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Unfounded',
			'DefDescription' => 'An "unfounded" adjudication means that the allegations are not true.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 112,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Findings',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Not Sustained',
			'DefDescription' => 'A "not sustained" or "not resolved" or "unresolved" adjudication means that there is insufficient evidence to prove or disprove the allegations by a preponderance of evidence.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 113,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Findings',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Sustained',
			'DefDescription' => 'A "founded" or "sustained" adjudication means that allegations are true by a preponderance of the evidence and that the conduct at issue is a violation of department rules.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 114,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Findings',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Other',
			'DefDescription' => 'This "other" category might include withdrawn complaints, complaints lacking sufficient information to complete an investigation, or complaints against officers not employed or no longer employed by the department.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 115,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefIsActive' => '0',
			'DefValue' => 'Unreasonable Force',
			'DefDescription' => 'Excessive Force: The amount of force the officer used was not "objectively reasonable."
Example: A complainant alleged that she accidentally drove into an area during road construction. An officer who was directing traffic approached her, yelled at her to get off the road, put his hand through her window, and started twisting her arm until she moved her car.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 116,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Wrongful Arrest',
			'DefDescription' => 'Wrongful Arrest: An arrest lacked probable cause.
Example: A complainant alleged that an officer approached him as he was sitting on a bench, detained him, handcuffed him, and searched his backpack without his consent.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 117,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Wrongful Detention',
			'DefDescription' => 'Wrongful Stop: A detention that lacked reasonable suspicion.
Example: A complainant alleged that an officer approached him as he was sitting on a bench, detained him, handcuffed him, and searched his backpack without his consent.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 118,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Wrongful Entry',
			'DefDescription' => 'Wrongful Entry: An officer entered private property without either consent or a warrant.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 119,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Wrongful Search',
			'DefDescription' => 'Wrongful Search: A search violated the protections provided by the 4th Amendment of the United States Constitution.
Example: A complainant alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 120,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Wrongful Property Seizure',
			'DefDescription' => 'Wrongful Seizure: A seizure violated the protections provided by the 4th Amendment of the United States Constitution.
Example: A complainant alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 121,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Bias-Based Policing',
			'DefDescription' => 'Bias-Based Policing: An officer engaged in conduct based on a person\'s race, color, religion (religious creed), age, marital status, national origin, ancestry, sex, sexual orientation, actual or perceived gender identity, medical condition, or disability.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 122,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Retaliation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 123,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Retaliation: Unnecessary Charges',
			'DefDescription' => 'Retaliation: Example: "Resisting Arrest" and "Interfering" are common "cover charges"/"contempt of cop".'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 124,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Excessive Citation',
			'DefDescription' => 'Example: A motorist gets pulled over and cited for speeding. On the same ticket, the officer also cites him for "illegal window tint," "muffler violation," "seat belt violation," and "illegal lane change."'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 125,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Intimidating Display Of Weapon',
			'DefDescription' => 'Non-Verbal Intimidation Using Weaopn: Weapon-related threats do not apply to weapons safely in holsters. Actual use of weapon against a person is use of force, not just intimidation.
(This Allegation should not appear for users who have any Use of Force Allegations)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 126,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Sexual Assault',
			'DefDescription' => 'Sexual Assault: Any involuntary sexual act in which a person is coerced or physically forced to engage against their will, or any non-consensual sexual touching of a person.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 127,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '12',
			'DefIsActive' => '0',
			'DefValue' => 'Policy or Procedure',
			'DefDescription' => 'Procedure: The officer took actions which did not follow appropriate policy, procedure, or guidelines.
Example: An officer parks an official police vehicle in a handicap parking spot. There did not seem to be any emergency to justify this.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 128,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '13',
			'DefIsActive' => '0',
			'DefValue' => 'Conduct Unbecoming an Officer',
			'DefDescription' => 'Conduct Unbecoming an Officer: A reasonable person would find the officer\'s on or off duty conduct to be unbecoming a police officer, and such conduct reflected adversely on the department.
Example: A complainant alleged that an officer routinely gets intoxicated and at a local bar and threatens people while flashing his badge.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 129,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '14',
			'DefIsActive' => '0',
			'DefValue' => 'Discourtesy',
			'DefDescription' => 'Discourtesy: The officer used profane or derogatory language, wasn\'t tactful, lost his/her temper, made verbal threats, became impatient, or was otherwise discourteous.
Example: An officer allegedly directed vulgar language at a complainant.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 130,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '15',
			'DefIsActive' => '0',
			'DefValue' => 'Officer Refused To Provide ID',
			'DefDescription' => 'Example: An officer allegedly failed to provide the complainant with his name and badge number after the identification was requested.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 131,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '16',
			'DefIsActive' => '0',
			'DefValue' => 'Miranda Rights'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 132,
			'DefDatabase' => '1',
			'DefSubset' => 'Allegation Type',
			'DefOrder' => '17',
			'DefIsActive' => '0',
			'DefValue' => 'Neglect of Duty',
			'DefDescription' => 'Procedure: The officer\'s inaction did not follow appropriate policy, procedure, or guidelines.
Example: A woman is groped on the street by an unknown man. When the police arrive, they refuse to file an official report or investigate.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 133,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefIsActive' => '0',
			'DefValue' => 'Assault on an Officer'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 134,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Disorderly Conduct'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 135,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Disturbing the Peace'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 136,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Failure to Obey/Comply'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 137,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Obstructing/Interfering'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 138,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Resisting Arrest'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 139,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Public Intoxication'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 140,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Marijuana Possession'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 141,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Drugs Other Than Marijuana'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 142,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefIsActive' => '0',
			'DefValue' => 'Race'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 143,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Color'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 144,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Ethnicity'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 145,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'National Origin'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 146,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Religion'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 147,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Age'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 148,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Gender'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 149,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Gender Identity'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 150,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Sexual Orientation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 151,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Family Responsibilities'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 152,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Disability'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 153,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Educational Level'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 154,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '12',
			'DefIsActive' => '0',
			'DefValue' => 'Political Affiliations'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 155,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '13',
			'DefIsActive' => '0',
			'DefValue' => 'Source of Income'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 156,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '14',
			'DefIsActive' => '0',
			'DefValue' => 'Place'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 157,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '15',
			'DefIsActive' => '0',
			'DefValue' => 'Residence'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 158,
			'DefDatabase' => '1',
			'DefSubset' => 'Bias Type',
			'DefOrder' => '16',
			'DefIsActive' => '0',
			'DefValue' => 'Business'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 159,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefIsActive' => '0',
			'DefValue' => 'Head'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 160,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Neck'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 161,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Torso'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 162,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Hand'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 163,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Elbow'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 164,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Arm'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 165,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Foot'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 166,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Knee'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 167,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Leg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 168,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Crotch'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 169,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Part',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Unknown'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 170,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Types',
			'DefIsActive' => '0',
			'DefValue' => 'Slim/Slender'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 171,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Medium/Average'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 172,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Athletic/Muscular'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 173,
			'DefDatabase' => '1',
			'DefSubset' => 'Body Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Large/Fat'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 174,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefIsActive' => '0',
			'DefValue' => 'Speeding'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 175,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Vehicle Defect'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 176,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Records Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 177,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Turn or Lane Change'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 178,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Seatbelt or Cell Phone Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 179,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Stop Sign/Light Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 180,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Disorderly Conduct'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 181,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Disturbing the Peace'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 182,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Failure to Obey/Comply'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 183,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Public Intoxication'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 184,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Marijuana Possession'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 185,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefIsActive' => '0',
			'DefValue' => 'Walking Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 186,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Disorderly Conduct'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 187,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Disturbing the Peace'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 188,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Failure to Obey/Comply'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 189,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Public Intoxication'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 190,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Marijuana Possession'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 191,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Oversight Models',
			'DefIsActive' => '0',
			'DefValue' => 'Investigative'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 192,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Oversight Models',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Review'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 193,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Oversight Models',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Audit'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 194,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefIsActive' => '0',
			'DefValue' => 'Incomplete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 195,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Hold'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 196,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'New'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 197,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Reviewed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 198,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Pending Attorney',
			'DefDescription' => 'This Complaint has NOT been submitted to any Oversight Agencies, because it has been determined to be a good prospect for an Attorney.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 199,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Attorney\'d'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 200,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Submitted to Oversight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 201,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Received by Oversight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 202,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Pending Oversight Investigation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 203,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Declined To Investigate (Closed)',
			'DefDescription' => 'Department acknowledges complaint, but did not initiate any investigation process.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 204,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Investigated (Closed)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 205,
			'DefDatabase' => '1',
			'DefSubset' => 'Complaint Status',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Closed',
			'DefDescription' => 'Should only be used for Complaint Types: [Fantastical,] Abuse, Spam, Test, Not Sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 206,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefIsActive' => '0',
			'DefValue' => 'Incomplete'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 207,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Hold'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 208,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'New'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 209,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Reviewed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 210,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Submitted to Oversight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 211,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Received to Oversight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 212,
			'DefDatabase' => '1',
			'DefSubset' => 'Compliment Status',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Closed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 213,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefIsActive' => '0',
			'DefValue' => 'Marijuana'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 214,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Other Illegal Drugs (i.e. cocaine, MDMA, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 215,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Gun'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 216,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Knife'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 217,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Stolen Goods'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 218,
			'DefDatabase' => '1',
			'DefSubset' => 'Contraband Types',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 219,
			'DefDatabase' => '1',
			'DefSubset' => 'Customer Types',
			'DefIsActive' => '0',
			'DefValue' => 'Attorney'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 220,
			'DefDatabase' => '1',
			'DefSubset' => 'Customer Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Academic'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 221,
			'DefDatabase' => '1',
			'DefSubset' => 'Customer Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Journalist'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 222,
			'DefDatabase' => '1',
			'DefSubset' => 'Customer Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Researcher'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 223,
			'DefDatabase' => '1',
			'DefSubset' => 'Evidence Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Photograph'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 224,
			'DefDatabase' => '1',
			'DefSubset' => 'Evidence Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Diagram'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 225,
			'DefDatabase' => '1',
			'DefSubset' => 'Evidence Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Document'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 226,
			'DefDatabase' => '1',
			'DefSubset' => 'Evidence Types',
			'DefIsActive' => '0',
			'DefValue' => 'Video'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 227,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefIsActive' => '0',
			'DefValue' => 'Control Hold',
			'DefDescription' => 'An officer\'s use of his/her limbs, torso or body weight, to move or restrain a person or to constrict a person\'s movements.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 228,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Body Weapons',
			'DefDescription' => 'An officer\'s use of his/her limbs in a manner similar to an impact weapon, e.g, using his/her hands to punch, hit or slap a person.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 229,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Takedown',
			'DefDescription' => 'An officer\'s use of his/her limbs, torso or body weight to force a person against an immovable object (such as a car or a wall) or to force a person to the ground.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 230,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Baton Strike'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 231,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Taser'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 232,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Gun',
			'DefDescription' => 'i.e. Firearm'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 233,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Mace or Pepper Spray',
			'DefDescription' => 'i.e. Chemical Agent'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 234,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'K9 (Dog) Bite'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 235,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Vehicle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 236,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Other',
			'DefDescription' => 'e.g. Rough Ride, Car Impact, Flashlight Strike, Lifting Up Cuffs...'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 237,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefIsActive' => '0',
			'DefValue' => 'Fist (Closed Hand)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 238,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Slap (Open Hand)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 239,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Kick (Feet)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 240,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Knee'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 241,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Elbow'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 242,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Body Weapons',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Head'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 243,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Control Hold',
			'DefIsActive' => '0',
			'DefValue' => 'Hands/Arms'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 244,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Control Hold',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Body Weight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 245,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Control Hold',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Knees'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 246,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Control Hold',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Feet/Legs'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 247,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Takedown',
			'DefIsActive' => '0',
			'DefValue' => 'Hands'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 248,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Takedown',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Tackle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 249,
			'DefDatabase' => '1',
			'DefSubset' => 'Force Type - Takedown',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Leg Sweep'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 250,
			'DefDatabase' => '1',
			'DefSubset' => 'Gun Ammo Types',
			'DefIsActive' => '0',
			'DefValue' => 'Lethal Ammo'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 251,
			'DefDatabase' => '1',
			'DefSubset' => 'Gun Ammo Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Less-Lethal Ammo (e.g. rubber bullets, bean bag rounds)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 252,
			'DefDatabase' => '1',
			'DefSubset' => 'Incident Event Types',
			'DefIsActive' => '0',
			'DefValue' => 'Stop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 253,
			'DefDatabase' => '1',
			'DefSubset' => 'Incident Event Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Search'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 254,
			'DefDatabase' => '1',
			'DefSubset' => 'Incident Event Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Force'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 255,
			'DefDatabase' => '1',
			'DefSubset' => 'Incident Event Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Arrest'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 256,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefIsActive' => '0',
			'DefValue' => 'Fatal injuries',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 257,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Major bone broken',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 258,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Compound fracture',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 259,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'In-patient hospital stay required',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 260,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Blood loss requiring transfusion',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 261,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Major concussion',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 262,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Longer than brief loss of consciousness',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 263,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Debilitating chronic pain',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 264,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Damage to organ (other than skin)',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 265,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Effective Tasings',
			'DefDescription' => 'LEVEL 1 (most serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 266,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Minor bone broken',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 267,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Major laceration requiring stitches',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 268,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '12',
			'DefIsActive' => '0',
			'DefValue' => 'Minor concussion',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 269,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '13',
			'DefIsActive' => '0',
			'DefValue' => 'Brief loss of consciousness',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 270,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '14',
			'DefIsActive' => '0',
			'DefValue' => 'Chipped or lost tooth',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 271,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '15',
			'DefIsActive' => '0',
			'DefValue' => 'Major abrasion',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 272,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '16',
			'DefIsActive' => '0',
			'DefValue' => 'Sprain',
			'DefDescription' => 'LEVEL 2 (serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 273,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '17',
			'DefIsActive' => '0',
			'DefValue' => 'Bruising',
			'DefDescription' => 'LEVEL 3 (least serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 274,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '18',
			'DefIsActive' => '0',
			'DefValue' => 'Minor laceration',
			'DefDescription' => 'LEVEL 3 (least serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 275,
			'DefDatabase' => '1',
			'DefSubset' => 'Injury Types',
			'DefOrder' => '19',
			'DefIsActive' => '0',
			'DefValue' => 'Minor abrasion',
			'DefDescription' => 'LEVEL 3 (least serious)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 276,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefIsActive' => '0',
			'DefValue' => 'No or does not apply'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 277,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Displayed Weapon'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 278,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Drew Weapon'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 279,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Pointed Weapon'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 280,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Weapon Fired/Discharged'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 281,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidating Displays Of Weapon',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Not sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 282,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefIsActive' => '0',
			'DefValue' => 'Baton'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 283,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Taser'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 284,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Gun'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 285,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Mace or Pepper Spray'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 286,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Canine (Dog)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 287,
			'DefDatabase' => '1',
			'DefSubset' => 'Intimidation Weapons',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 288,
			'DefDatabase' => '1',
			'DefSubset' => 'No Charges Filed',
			'DefIsActive' => '0',
			'DefValue' => 'N/A'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 289,
			'DefDatabase' => '1',
			'DefSubset' => 'No Charges Filed',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'ALL Charges Were Dropped Before Release'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 290,
			'DefDatabase' => '1',
			'DefSubset' => 'No Charges Filed',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'No Charges Were Ever Filed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 291,
			'DefDatabase' => '1',
			'DefSubset' => 'Officer Discipline Types',
			'DefIsActive' => '0',
			'DefValue' => 'Training and/or Counseling'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 292,
			'DefDatabase' => '1',
			'DefSubset' => 'Officer Discipline Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Letter of Reprimand'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 293,
			'DefDatabase' => '1',
			'DefSubset' => 'Officer Discipline Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Suspension'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 294,
			'DefDatabase' => '1',
			'DefSubset' => 'Officer Discipline Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Termination'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 295,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefIsActive' => '0',
			'DefValue' => 'Unreviewed'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 296,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Legitimate'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 297,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Not About Police'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 298,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Abuse'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 299,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Spam'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 300,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Test'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 301,
			'DefDatabase' => '1',
			'DefSubset' => 'OPC Staff/Internal Complaint Type',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Not Sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 302,
			'DefDatabase' => '1',
			'DefSubset' => 'Oversight Agency Types',
			'DefIsActive' => '0',
			'DefValue' => 'Civilian Oversight'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 303,
			'DefDatabase' => '1',
			'DefSubset' => 'Oversight Agency Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Internal Affairs'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 304,
			'DefDatabase' => '1',
			'DefSubset' => 'Privacy Types',
			'DefIsActive' => '0',
			'DefValue' => 'Submit Publicly'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 305,
			'DefDatabase' => '1',
			'DefSubset' => 'Privacy Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Names Visible to Police but not Public'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 306,
			'DefDatabase' => '1',
			'DefSubset' => 'Privacy Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Completely Anonymous',
			'DefDescription' => 'Anonymous complaints would have no public-facing details for civilians or officers. This is an option the user has early in the complaint process.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 307,
			'DefDatabase' => '1',
			'DefSubset' => 'Privacy Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Anonymized',
			'DefDescription' => 'Anonymized complaints would have all open-ended questions scrubbed, only leaving aggregate-friendly data. This is an action take by an analyst or the complainant some time after the complaint was submitted.'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 308,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefIsActive' => '0',
			'DefValue' => 'Cash'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 309,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Phone'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 310,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'TV'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 311,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Vehicle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 312,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Real Estate'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 313,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Bank Account'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 314,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Boat'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 315,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Firearms'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 316,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Identity Documents'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 317,
			'DefDatabase' => '1',
			'DefSubset' => 'Property Seized Types',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Other Items'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 318,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefIsActive' => '0',
			'DefValue' => 'Asian American'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 319,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Black or African American'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 320,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Hispanic or Latino'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 321,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Native American'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 322,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Pacific Islander'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 323,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'White'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 324,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 325,
			'DefDatabase' => '1',
			'DefSubset' => 'Races',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Decline or Unknown'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 326,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefIsActive' => '0',
			'DefValue' => 'Walking Violation',
			'DefDescription' => 'e.g. Jay Walking'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 327,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Disturbing the Peace'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 328,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Public Intoxication'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 329,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Drug Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 330,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Suspected of Something Else'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 331,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Matched a Description of Someone'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 332,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Investigating Someone Else'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 333,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Providing Assistance/Responding to Call'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 334,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Other Reason'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 335,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Officer Did Not Give Reason For Stop',
			'DefDescription' => 'e.g. NYC Stop & Frisk'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 336,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefIsActive' => '0',
			'DefValue' => 'Speeding'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 337,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Vehicle Defect'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 338,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Expired Registration'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 339,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'License Plate Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 340,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Illegal Turn or Lane Change'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 341,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Seatbelt or Cell Phone Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 342,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Stop Sign/Light Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 343,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Driving While Impaired',
			'DefDescription' => 'The officer stated this as the reason for stop, but this was not at a designated "sobriety checkpoint" (that option is below).'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 344,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Sobriety Checkpoint'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 345,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Border Checkpoint'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 346,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '11',
			'DefIsActive' => '0',
			'DefValue' => 'Other Reason'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 347,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '12',
			'DefIsActive' => '0',
			'DefValue' => 'Officer Did Not Give Reason For Stop'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 349,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Home, private residence, or dorm (includes just outside the residence)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 350,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Workplace'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 351,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Airport'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 352,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Outdoor public space (includes roads, sidewalks, parks, etc.)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 353,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Indoor public space'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 355,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Civilian',
			'DefIsActive' => '0',
			'DefValue' => 'Car'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 356,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Civilian',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Bicycle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 357,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Civilian',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Boat'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 358,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Civilian',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Motorcycle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 360,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Car'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 361,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Van'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 362,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Motorcycle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 363,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Bicycle'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 364,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Boat'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 365,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Officer',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 366,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Departments',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Federal Law Enforcement'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 367,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Departments',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'State Police'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 368,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Departments',
			'DefIsActive' => '0',
			'DefValue' => 'Local Police'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 369,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Departments',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Sheriffs\' Offices'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 370,
			'DefDatabase' => '1',
			'DefSubset' => 'Types of Departments',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Other Police Departments'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 371,
			'DefDatabase' => '1',
			'DefSubset' => 'User Types',
			'DefIsActive' => '0',
			'DefValue' => 'Admin'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 372,
			'DefDatabase' => '1',
			'DefSubset' => 'User Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Oversight Agency'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 373,
			'DefDatabase' => '1',
			'DefSubset' => 'User Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Customer'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 374,
			'DefDatabase' => '1',
			'DefSubset' => 'User Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Civilian'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 375,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefIsActive' => '0',
			'DefValue' => 'Threats'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 376,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Shouting'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 377,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Cursing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 378,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Racism'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 379,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Sexism'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 380,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Homophobia'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 381,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Lies'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 382,
			'DefDatabase' => '1',
			'DefSubset' => 'Verbal Abuse Types',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Disrespect'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 383,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefIsActive' => '0',
			'DefValue' => 'Female'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 384,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Male'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 385,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'Female to male transgender'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 386,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '4',
			'DefIsActive' => '0',
			'DefValue' => 'Male to female transgender'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 387,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '9',
			'DefIsActive' => '0',
			'DefValue' => 'Not sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 388,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '10',
			'DefIsActive' => '0',
			'DefValue' => 'Other',
			'DefDescription' => 'http://www.hrc.org/resources/collecting-transgender-inclusive-gender-data-in-workplace-and-other-surveys'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 389,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '8',
			'DefIsActive' => '0',
			'DefValue' => 'Intersex'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 390,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '5',
			'DefIsActive' => '0',
			'DefValue' => 'Genderqueer/Androgynous'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 391,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '6',
			'DefIsActive' => '0',
			'DefValue' => 'Cross-dresser'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 392,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '7',
			'DefIsActive' => '0',
			'DefValue' => 'Transsexual'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 393,
			'DefDatabase' => '1',
			'DefSubset' => 'Gender Identity',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Transgender'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 394,
			'DefDatabase' => '1',
			'DefSubset' => 'How Did You Hear',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'ACLU (American Civil Liberties Union)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 395,
			'DefDatabase' => '1',
			'DefSubset' => 'How Did You Hear',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'NAACP (National Association for the Advancement of Colored People)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 396,
			'DefDatabase' => '1',
			'DefSubset' => 'How Did You Hear',
			'DefOrder' => '3',
			'DefIsActive' => '0',
			'DefValue' => 'CopWatch'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 397,
			'DefDatabase' => '1',
			'DefSubset' => 'How Did You Hear',
			'DefIsActive' => '0',
			'DefValue' => 'NACOLE (National Association for Civilian Oversight of Law Enforcement)'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 398,
			'DefDatabase' => '1',
			'DefSubset' => 'Unresolved Charges Actions',
			'DefIsActive' => '0',
			'DefValue' => 'Full complaint to print or save'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 399,
			'DefDatabase' => '1',
			'DefSubset' => 'Unresolved Charges Actions',
			'DefOrder' => '1',
			'DefIsActive' => '0',
			'DefValue' => 'Anonymous complaint data only'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 400,
			'DefDatabase' => '1',
			'DefSubset' => 'Unresolved Charges Actions',
			'DefOrder' => '2',
			'DefIsActive' => '0',
			'DefValue' => 'Logout'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 401,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '3',
			'DefValue' => 'Loitering/Trespassing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 402,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '8',
			'DefValue' => 'Loitering/Trespassing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 403,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '5',
			'DefValue' => 'Loitering/Trespassing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 404,
			'DefDatabase' => '1',
			'DefSubset' => 'Scene Type',
			'DefOrder' => '3',
			'DefValue' => 'School'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 405,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Pedestrian Stop',
			'DefOrder' => '2',
			'DefValue' => 'Loitering/Trespassing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 406,
			'DefDatabase' => '1',
			'DefSubset' => 'Reason for Vehicle Stop',
			'DefOrder' => '10',
			'DefValue' => 'Loitering/Trespassing'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 407,
			'DefDatabase' => '1',
			'DefSubset' => 'Transportation Civilian',
			'DefOrder' => '4',
			'DefValue' => 'Other'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 408,
			'DefDatabase' => '1',
			'DefSubset' => 'Chase Types',
			'DefValue' => 'On Foot'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 409,
			'DefDatabase' => '1',
			'DefSubset' => 'Chase Types',
			'DefOrder' => '1',
			'DefValue' => 'In Vehicles'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 410,
			'DefDatabase' => '1',
			'DefSubset' => 'Chase Types',
			'DefOrder' => '2',
			'DefValue' => 'Both'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 411,
			'DefDatabase' => '1',
			'DefSubset' => 'Arrest Charges',
			'DefOrder' => '10',
			'DefValue' => 'Weapons Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 412,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges Pedestrian',
			'DefOrder' => '7',
			'DefValue' => 'Weapons Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 413,
			'DefDatabase' => '1',
			'DefSubset' => 'Citation Charges',
			'DefOrder' => '12',
			'DefValue' => 'Weapons Violation'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 414,
			'DefDatabase' => '1',
			'DefSubset' => 'Chase Types',
			'DefOrder' => '3',
			'DefValue' => 'Not sure'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 415,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Weapons',
			'DefValue' => 'Gun'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 416,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Weapons',
			'DefOrder' => '1',
			'DefValue' => 'Knife'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 417,
			'DefDatabase' => '1',
			'DefSubset' => 'Civilian Weapons',
			'DefOrder' => '2',
			'DefValue' => 'Other'
		]);
		
		
		DB::table('SL_BusRules')->insert([
			'RuleID' => 3,
			'RuleDatabase' => '1',
			'RuleStatement' => 'Every Event Sequence Record must be associated with exactly one Stop, Search, Force, or Arrest which occur in the chronology of the overall Incident. ',
			'RuleConstraint' => 'Every Event Sequence Record must have an associated record in either the Stop table, Search table, Force table, or Arrest table.',
			'RuleTables' => ',137,121,122,123,116,',
			'RuleFields' => ',820,821,822,1015,1014,1013,1012,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 4,
			'RuleDatabase' => '1',
			'RuleStatement' => 'There can potentially be many Orders from many Officers to many Civilians related to each Stop, Search, use of Force, Arrest, etc.',
			'RuleConstraint' => 'Each Order record is related to one Stop, Search, use of Force, or Arrest via an Event Sequence record. People involved with each Order record are associated via the People-Event Links record&#39;s Order ID foreign key. (all foreign keys must be current records in the appropriate table)',
			'RuleTables' => ',120,137,142,',
			'RuleFields' => ',791,886,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'Though implied through table and field specifications, this nuance will require thought during implementation.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 5,
			'RuleDatabase' => '1',
			'RuleStatement' => 'Evidence must be related to either a Scene, Event Sequence, Property, or Injury.',
			'RuleConstraint' => 'Each record needs to be associated with exactly one Scene ID, Event Sequence ID, Property ID, or Injury ID (which are current records in the appropriate table).',
			'RuleTables' => ',119,',
			'RuleFields' => ',252,799,802,266,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 6,
			'RuleDatabase' => '1',
			'RuleStatement' => 'The source of the Evidence can optionally be set to either a Civilian, or a Police Department.',
			'RuleConstraint' => 'Each Evidence record can optionally be associated with exactly one Civilian ID, or Department ID (which are current records in the appropriate table).',
			'RuleTables' => ',119,',
			'RuleFields' => ',291,292,293,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 9,
			'RuleDatabase' => '1',
			'RuleStatement' => 'People-Event Links are related to either an Officer or a Civilian.',
			'RuleConstraint' => 'Each People-Event Links record must have a value for either a Officer ID or Civilian ID (which are current records in the appropriate table).',
			'RuleTables' => ',142,',
			'RuleFields' => ',878,879,880,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 10,
			'RuleDatabase' => '1',
			'RuleStatement' => 'People-Event Links are related to either an Event Sequence, an Allegation, or an Order.',
			'RuleConstraint' => 'Each People-Event Links record must have a value for either a Event Sequence ID, Allegation ID, or Order ID (which are current records in the appropriate table).',
			'RuleTables' => ',142,',
			'RuleFields' => ',882,881,886,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 11,
			'RuleDatabase' => '1',
			'RuleStatement' => 'The Department ID field can be used instead of the Complaint ID to allow privileges to a User for all Complaints associated with a certain Police Department.',
			'RuleConstraint' => 'Each Privileges Profile record must have a value for either a Complaint ID or a Department ID (which are current records in the appropriate table). ',
			'RuleTables' => ',125,',
			'RuleFields' => ',501,458,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 12,
			'RuleDatabase' => '1',
			'RuleStatement' => 'A new Verified Officer Record should be created for every Officer if a matching Verified Officer does not exist upon creation of a new Complaint record (as decided by Complainant).',
			'RuleConstraint' => 'Every newlyÂ created Officer record (without a preexisting Verified Officer ID) needs to have a new Verified Officer record created with its Verification Status set to &quot;New&quot; pending admin verification.',
			'RuleTables' => ',104,129,',
			'RuleFields' => ',396,',
			'RuleLogic' => '13',
			'RuleRel' => '15',
			'RuleAction' => 'This rule must be enforced during implementation of system.'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 16,
			'RuleDatabase' => '1',
			'RuleStatement' => 'For a handcuff Injury to be associated with a Stop, tangible Evidence is required.',
			'RuleConstraint' => 'The Injury record associated with a Stop record&#39;s Handcuff Injury field is required to have visual Evidence associated with it.',
			'RuleTables' => ',121,119,-3,117,',
			'RuleFields' => ',816,266,378,',
			'RuleLogic' => '13',
			'RuleRel' => '15'
		]);
		DB::table('SL_BusRules')->insert([
			'RuleID' => 17,
			'RuleDatabase' => '1',
			'RuleStatement' => '<b>Administrator Tasks During Review:</b> Was this a Search Incident To Arrest? --- Validate Described Reasons for Stop --- ...',
			'RuleTables' => ',123,121,',
			'RuleFields' => ',352,313,787,'
		]);
		
		DB::table('SL_Node')->insert([
			'NodeID' => 1,
			'NodeTree' => '1',
			'NodeParentID' => '451',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Share Your Story - Memories fade fast. So please take a few minutes to write down all of the details you can remember below. Don\'t worry about spelling or grammar yet. You\'ll be able to use this notepad anytime to help you jog your memory.',
			'NodeDataStore' => 'Complaints:ComSummary',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 2,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Basic Info Section',
			'NodePromptNotes' => 'share-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 3,
			'NodeTree' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Open Police Complaint Process',
			'NodePromptNotes' => 'share-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 4,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Who\'s Involved',
			'NodePromptNotes' => 'your-info'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 5,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '5',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Allegations (Silver)',
			'NodePromptNotes' => 'next-what-happened',
			'NodeDataBranch' => 'AllegSilver'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 6,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '6',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Go Gold',
			'NodePromptNotes' => 'go-gold'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 8,
			'NodeTree' => '1',
			'NodeParentID' => '454',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Since this is so important, please create a login so you can finish later if you get disconnected.',
			'NodeInternalNotes' => 'Open to idea of Login with Facebook (could be great for viral sharing of complaints once complete).'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 15,
			'NodeTree' => '1',
			'NodeParentID' => '455',
			'NodeType' => 'Date',
			'NodePromptText' => '<h1>On what date did this incident happen?</h1>',
			'NodeDataStore' => 'Incidents:IncTimeStart',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 16,
			'NodeTree' => '1',
			'NodeParentID' => '455',
			'NodeParentOrder' => '1',
			'NodeType' => 'Time',
			'NodePromptText' => 'Start Time',
			'NodeDataStore' => 'Incidents:IncTimeStart',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 17,
			'NodeTree' => '1',
			'NodeParentID' => '455',
			'NodeParentOrder' => '2',
			'NodeType' => 'Time',
			'NodePromptText' => 'End Time',
			'NodeDataStore' => 'Incidents:IncTimeEnd',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 18,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="m0">Where did this incident happen?</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 22,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Street Address',
			'NodeDataStore' => 'Incidents:IncAddress',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 23,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Address Line 2',
			'NodeDataStore' => 'Incidents:IncAddress2',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 24,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'City',
			'NodeDataStore' => 'Incidents:IncAddressCity',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 25,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '4',
			'NodeType' => 'U.S. States',
			'NodePromptText' => 'State',
			'NodeResponseSet' => '[U.S.States]',
			'NodeDataStore' => 'Incidents:IncAddressState',
			'NodeOpts' => '195'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 26,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Zip',
			'NodeDataStore' => 'Incidents:IncAddressZip',
			'NodeOpts' => '39'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 27,
			'NodeTree' => '1',
			'NodeParentID' => '456',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'If the address is not known or not useful, please describe nearby landmarks.',
			'NodeDataStore' => 'Incidents:IncLandmarks',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 28,
			'NodeTree' => '1',
			'NodeParentID' => '459',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>How were <span class="slBlueDark">you</span> involved with this incident?</h2>',
			'NodeDataStore' => 'Civilians:CivRole',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 29,
			'NodeTree' => '1',
			'NodeParentID' => '565',
			'NodeType' => 'Instructions',
			'NodePromptText' => 'Please provide basic information about yourself.',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 30,
			'NodeTree' => '1',
			'NodeParentID' => '565',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'First Name',
			'NodeDataStore' => 'PersonContact:PrsnNameFirst',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 31,
			'NodeTree' => '1',
			'NodeParentID' => '565',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Middle Name',
			'NodeDataStore' => 'PersonContact:PrsnNameMiddle',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 32,
			'NodeTree' => '1',
			'NodeParentID' => '565',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Last Name',
			'NodeDataStore' => 'PersonContact:PrsnNameLast',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 33,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Street Address',
			'NodeDataStore' => 'PersonContact:PrsnAddress',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 34,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Address Line 2',
			'NodeDataStore' => 'PersonContact:PrsnAddress2',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 35,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'City',
			'NodeDataStore' => 'PersonContact:PrsnAddressCity',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 36,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '4',
			'NodeType' => 'U.S. States',
			'NodePromptText' => 'State',
			'NodeResponseSet' => '[U.S.States]',
			'NodeDataStore' => 'PersonContact:PrsnAddressState',
			'NodeOpts' => '195'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 37,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Zip',
			'NodeDataStore' => 'PersonContact:PrsnAddressZip',
			'NodeOpts' => '195'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 38,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'Phone',
			'NodeDataStore' => 'PersonContact:PrsnPhoneHome',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '7',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Address',
			'NodeInternalNotes' => 'Auto-fill if provided during login',
			'NodeDataStore' => 'PersonContact:PrsnEmail',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeParentOrder' => '8',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facebook Profile URL',
			'NodeInternalNotes' => 'Auto-fill if provided during login',
			'NodeDataStore' => 'PersonContact:PrsnFacebook',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 41,
			'NodeTree' => '1',
			'NodeParentID' => '604',
			'NodeType' => 'Date',
			'NodePromptText' => 'Date of Birth',
			'NodeDataStore' => 'PersonContact:PrsnBirthday',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 42,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeParentOrder' => '1',
			'NodeType' => 'Gender',
			'NodePromptText' => 'Gender',
			'NodeDataStore' => 'PhysicalDesc:PhysGender',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeParentOrder' => '4',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Race',
			'NodeResponseSet' => 'Definition::Races',
			'NodeDataStore' => 'PhysicalDescRace:PhysRaceRace',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 44,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'What\'s your occupation or something important about you?',
			'NodePromptNotes' => 'For example, "I\'m a disabled veteran" or "I\'m a high school student".',
			'NodeDataStore' => 'Civilians:CivOccupation',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 47,
			'NodeTree' => '1',
			'NodeParentID' => '459',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did you record the incident? This includes video or audio.',
			'NodeDataStore' => 'Civilians:CivCameraRecord',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 48,
			'NodeTree' => '1',
			'NodeParentID' => '567',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the beginning of the incident, were you in any type of vehicle?',
			'NodeDataStore' => 'Civilians:CivHadVehicle',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 49,
			'NodeTree' => '1',
			'NodeParentID' => '573',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of vehicle was it?',
			'NodeResponseSet' => 'Definition::Transportation Civilian',
			'NodeDataStore' => 'Vehicles:VehicTransportation',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 50,
			'NodeTree' => '1',
			'NodeParentID' => '573',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Make',
			'NodeDataStore' => 'Vehicles:VehicVehicleMake',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 51,
			'NodeTree' => '1',
			'NodeParentID' => '573',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Model',
			'NodeDataStore' => 'Vehicles:VehicVehicleModel',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '1',
			'NodeParentID' => '573',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Description',
			'NodeDataStore' => 'Vehicles:VehicVehicleDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 53,
			'NodeTree' => '1',
			'NodeParentID' => '573',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'License Number',
			'NodeDataStore' => 'Vehicles:VehicVehicleLicence',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 55,
			'NodeTree' => '1',
			'NodeParentID' => '140',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<h1 class="blk">Who\'s Involved: Adding Victims</h1>
<div class="mT20">Please provide information about the victims in this incident. These are people who were harmed by an alleged act of police misconduct. If you were the only victim, click Next.</div>',
			'NodePromptNotes' => 'add-victims',
			'NodeDataBranch' => 'Victims',
			'NodeDataStore' => 'Civilians:CivID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 56,
			'NodeTree' => '1',
			'NodeParentID' => '605',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know the name of this victim?',
			'NodeDataStore' => 'Civilians:CivGiveName',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 57,
			'NodeTree' => '1',
			'NodeParentID' => '56',
			'NodeType' => 'Text',
			'NodePromptText' => 'First Name',
			'NodeDataStore' => 'PersonContact:PrsnNameFirst',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 58,
			'NodeTree' => '1',
			'NodeParentID' => '56',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Last Name',
			'NodeDataStore' => 'PersonContact:PrsnNameLast',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 59,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeType' => 'Text',
			'NodePromptText' => 'Street Address',
			'NodeDataStore' => 'PersonContact:PrsnAddress',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Address Line 2',
			'NodeDataStore' => 'PersonContact:PrsnAddress2',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'City',
			'NodeDataStore' => 'PersonContact:PrsnAddressCity',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 62,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '3',
			'NodeType' => 'U.S. States',
			'NodePromptText' => 'State',
			'NodeResponseSet' => '[U.S.States]',
			'NodeDataStore' => 'PersonContact:PrsnAddressState',
			'NodeOpts' => '39'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 63,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Zip',
			'NodeDataStore' => 'PersonContact:PrsnAddressZip',
			'NodeOpts' => '39'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 64,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Phone',
			'NodeDataStore' => 'PersonContact:PrsnPhoneHome',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 65,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '6',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Address',
			'NodeDataStore' => 'PersonContact:PrsnEmail',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 66,
			'NodeTree' => '1',
			'NodeParentID' => '70',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facebook Profile URL',
			'NodeDataStore' => 'PersonContact:PrsnFacebook',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 67,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '4',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Age Range',
			'NodeResponseSet' => 'Definition::Age Ranges',
			'NodeDataStore' => 'PhysicalDesc:PhysAge',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 68,
			'NodeTree' => '1',
			'NodeParentID' => '566',
			'NodeType' => 'Instructions',
			'NodePromptText' => 'Contact information helps with the investigation. We will never voluntarily make it public.',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 69,
			'NodeTree' => '1',
			'NodeParentID' => '567',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="m0">Other important details about you:</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 70,
			'NodeTree' => '1',
			'NodeParentID' => '605',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you have any contact information for this victim like their address, phone number, or email?',
			'NodePromptNotes' => 'This helps with the investigation but will never be made public.',
			'NodeDataStore' => 'Civilians:CivGiveContactInfo',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 71,
			'NodeTree' => '1',
			'NodeParentID' => '56',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Middle Name',
			'NodeDataStore' => 'PersonContact:PrsnNameMiddle',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 73,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '2',
			'NodeType' => 'Gender Not Sure',
			'NodePromptText' => 'Gender',
			'NodeDataStore' => 'PhysicalDesc:PhysGender',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 74,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '3',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Race',
			'NodeResponseSet' => 'Definition::Races',
			'NodeDataStore' => 'PhysicalDescRace:PhysRaceRace',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 75,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'What\'s the occupation or something important about this victim?',
			'NodePromptNotes' => 'For example, "he\'s a disabled veteran" or "she\'s a high school student".',
			'NodeDataStore' => 'Civilians:CivOccupation',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 76,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like to give a physical description of this victim? Please do this if you are not sure about their name.',
			'NodeDataStore' => 'Civilians:CivGivePhysDesc',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 78,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeType' => 'Feet Inches',
			'NodePromptText' => 'Height Estimate',
			'NodeDataStore' => 'PhysicalDesc:PhysHeight',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 79,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '1',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Body Type',
			'NodeResponseSet' => 'Definition::Body Types',
			'NodeDataStore' => 'PhysicalDesc:PhysBodyType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 80,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairDescription',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 81,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facial Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairFacialDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 83,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Eyes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysEyes',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 84,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Distinguishing Marks',
			'NodeDataStore' => 'PhysicalDesc:PhysDistinguishingMarksDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 85,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'Voice Description',
			'NodeDataStore' => 'PhysicalDesc:PhysVoiceDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 86,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Clothes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysClothesDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 87,
			'NodeTree' => '1',
			'NodeParentID' => '76',
			'NodeParentOrder' => '8',
			'NodeType' => 'Text',
			'NodePromptText' => 'Physical Disabilities Description',
			'NodeDataStore' => 'PhysicalDesc:PhysDisabilitiesDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 89,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did this victim record the incident? This includes video or audio.',
			'NodeDataStore' => 'Civilians:CivCameraRecord',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 90,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the beginning of the incident, was this victim in any type of vehicle?',
			'NodeDataStore' => 'Civilians:CivHadVehicle',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 91,
			'NodeTree' => '1',
			'NodeParentID' => '578',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of vehicle was it?',
			'NodeResponseSet' => 'Definition::Transportation Civilian',
			'NodeDataStore' => 'Vehicles:VehicTransportation',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 92,
			'NodeTree' => '1',
			'NodeParentID' => '578',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Make',
			'NodeDataStore' => 'Vehicles:VehicVehicleMake',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 93,
			'NodeTree' => '1',
			'NodeParentID' => '578',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Model',
			'NodeDataStore' => 'Vehicles:VehicVehicleModel',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 94,
			'NodeTree' => '1',
			'NodeParentID' => '578',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Description',
			'NodeDataStore' => 'Vehicles:VehicVehicleDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 95,
			'NodeTree' => '1',
			'NodeParentID' => '578',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'License Number',
			'NodeDataStore' => 'Vehicles:VehicVehicleLicence',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 97,
			'NodeTree' => '1',
			'NodeParentID' => '141',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<h1 class="blk">Who\'s Involved: Adding Witnesses</h1>
Please share information about people who observed the incident. Witnesses are distinct from victims if they weren\'t harmed by anything an officer did.',
			'NodePromptNotes' => 'add-witnesses',
			'NodeDataBranch' => 'Witnesses',
			'NodeDataStore' => 'Civilians:CivID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 98,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div id="fixedHeader"><h2>Witness #[LoopItemCnt]:</h2></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 99,
			'NodeTree' => '1',
			'NodeParentID' => '447',
			'NodeType' => 'Text',
			'NodePromptText' => 'First Name',
			'NodeDataStore' => 'PersonContact:PrsnNameFirst',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 100,
			'NodeTree' => '1',
			'NodeParentID' => '447',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Middle Name',
			'NodeDataStore' => 'PersonContact:PrsnNameMiddle',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 101,
			'NodeTree' => '1',
			'NodeParentID' => '447',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Last Name',
			'NodeDataStore' => 'PersonContact:PrsnNameLast',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 102,
			'NodeTree' => '1',
			'NodeParentID' => '606',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you have any contact information for this witness like their address, phone number, or email?',
			'NodeDataStore' => 'Civilians:CivGiveName',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 103,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeType' => 'Text',
			'NodePromptText' => 'Street Address',
			'NodeDataStore' => 'PersonContact:PrsnAddress',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 104,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Address Line 2',
			'NodeDataStore' => 'PersonContact:PrsnAddress2',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 105,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'City',
			'NodeDataStore' => 'PersonContact:PrsnAddressCity',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 106,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '3',
			'NodeType' => 'U.S. States',
			'NodePromptText' => 'State',
			'NodeResponseSet' => '[U.S.States]',
			'NodeDataStore' => 'PersonContact:PrsnAddressState',
			'NodeOpts' => '39'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 107,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Zip',
			'NodeDataStore' => 'PersonContact:PrsnAddressZip',
			'NodeOpts' => '39'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 108,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Phone',
			'NodeDataStore' => 'PersonContact:PrsnPhoneHome',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 109,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '6',
			'NodeType' => 'Email',
			'NodePromptText' => 'Email Address',
			'NodeDataStore' => 'PersonContact:PrsnEmail',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 110,
			'NodeTree' => '1',
			'NodeParentID' => '102',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facebook Profile URL',
			'NodeDataStore' => 'PersonContact:PrsnFacebook',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 112,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '3',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Age Range',
			'NodeResponseSet' => 'Definition::Age Ranges',
			'NodeDataStore' => 'PhysicalDesc:PhysAge',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 113,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '2',
			'NodeType' => 'Gender Not Sure',
			'NodePromptText' => 'Gender',
			'NodeDataStore' => 'PhysicalDesc:PhysGender',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 114,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '4',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Race',
			'NodeResponseSet' => 'Definition::Races',
			'NodeDataStore' => 'PhysicalDescRace:PhysRaceRace',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 115,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'What\'s the occupation or something important about this witness?',
			'NodePromptNotes' => 'For example, "she\'s a small business owner" or "he\'s a high school teacher".',
			'NodeDataStore' => 'Civilians:CivOccupation',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 117,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like to give a physical description of this witness? Please do this if you are not sure about their name.',
			'NodeDataStore' => 'Civilians:CivGivePhysDesc',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 118,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeType' => 'Feet Inches',
			'NodePromptText' => 'Height Estimate',
			'NodeDataStore' => 'PhysicalDesc:PhysHeight',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 119,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '1',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Body Type',
			'NodeResponseSet' => 'Definition::Body Types',
			'NodeDataStore' => 'PhysicalDesc:PhysBodyType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 120,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairDescription',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 121,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facial Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairFacialDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 122,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Eyes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysEyes',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 124,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Distinguishing Marks',
			'NodeDataStore' => 'PhysicalDesc:PhysDistinguishingMarksDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 125,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'Voice Description',
			'NodeDataStore' => 'PhysicalDesc:PhysVoiceDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 126,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Clothes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysClothesDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 127,
			'NodeTree' => '1',
			'NodeParentID' => '117',
			'NodeParentOrder' => '8',
			'NodeType' => 'Text',
			'NodePromptText' => 'Physical Disabilities Description',
			'NodeDataStore' => 'PhysicalDesc:PhysDisabilitiesDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 129,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '8',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did this witness record the incident? This includes video or audio.',
			'NodeDataStore' => 'Civilians:CivCameraRecord',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 130,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the beginning of the incident, was this witness in any type of vehicle?',
			'NodeDataStore' => 'Civilians:CivHadVehicle',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 131,
			'NodeTree' => '1',
			'NodeParentID' => '583',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of vehicle was it?',
			'NodeResponseSet' => 'Definition::Transportation Civilian',
			'NodeDataStore' => 'Vehicles:VehicTransportation',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 132,
			'NodeTree' => '1',
			'NodeParentID' => '583',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Make',
			'NodeDataStore' => 'Vehicles:VehicVehicleMake',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 133,
			'NodeTree' => '1',
			'NodeParentID' => '583',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Model',
			'NodeDataStore' => 'Vehicles:VehicVehicleModel',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 134,
			'NodeTree' => '1',
			'NodeParentID' => '583',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Description',
			'NodeDataStore' => 'Vehicles:VehicVehicleDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 135,
			'NodeTree' => '1',
			'NodeParentID' => '583',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'License Number',
			'NodeDataStore' => 'Vehicles:VehicVehicleLicence',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 138,
			'NodeTree' => '1',
			'NodeParentID' => '453',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2 class="m0">Privacy Options</h2>

How do you want the names of people involved to appear on your public complaint? (Each option will still submit your entire complaint to the appropriate oversight agency.)

Full Transparency

Yes! I want to publish all the names of civilians and police officers on this website.

This is the only way to have your story, and pictures, published on this website.

This is the only option that will allow your story, and pictures to be published this website.

No Names Public

I don\'t want to publish any names on this website.

We will not publish any details that could be used for personal identification.
Anonymous

I need my complaint to be completely anonymous, even though it will be harder to investigate.

Neither OPC staff nor investigators will be able to contact you. We will not publish any details that could be used for personal identification.


Privacy Note: No matter which option you select, we\'ll never publish anyone\'s private information. (This includes addresses, phone numbers, emails, etc.) We will only share this with appropriate oversight agencies who can investigate your complaint.',
			'NodeDataStore' => 'Complaints:ComPrivacy'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 139,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'About You',
			'NodePromptNotes' => 'your-info'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 140,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'About Victims',
			'NodePromptNotes' => 'add-victims'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 141,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'About Witnesses',
			'NodePromptNotes' => 'add-witnesses'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 142,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'About Police Officers',
			'NodePromptNotes' => 'add-police-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 143,
			'NodeTree' => '1',
			'NodeParentID' => '144',
			'NodeParentOrder' => '1',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<div class="f28 blk pB20">Police Department(s) On The Scene</div>
Identify the main police department(s) involved in the incident.',
			'NodePromptNotes' => 'add-police-departments',
			'NodeDataBranch' => 'Departments',
			'NodeDataStore' => 'Departments:DeptID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 144,
			'NodeTree' => '1',
			'NodeParentID' => '4',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'About Police Departments',
			'NodePromptNotes' => 'next-police-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 145,
			'NodeTree' => '1',
			'NodeParentID' => '464',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => 'Find Police Department',
			'NodeInternalNotes' => 'This node is hard-coded in class-tree-OPC.php [for now].',
			'NodeDataStore' => 'Departments:DeptID',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 146,
			'NodeTree' => '1',
			'NodeParentID' => '482',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader"><img src="https://app.openpolicecomplaints.org/images/medal-gold.png" align=right hspace=5 height=100 >
<h1 class="mT0">Great Job!</h1> You have completed a solid complaint, providing the baseline for what most departments need to investigate your incident.
<br /><br />
But here are the benefits of taking a few more minutes to create a <span class="goldLevel">GOLD STAR complaint</span>:
			<ul class="mT20">
			<li class="mB20">Discover important things about your incident and paint a more complete picture</li>
			<li class="mB20">Create a first-class complaint, that is even stronger for investigators</li>
			<li class="mB20">Receive custom information on the many things you can learn from this police encounter</li>
			<li class="mB20">Helps us to better track problematic police behavior in your community and nationwide</li>
</ul>
</div>',
			'NodeDataStore' => 'Complaints:ComAwardMedallion'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 148,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeParentOrder' => '3',
			'NodeType' => 'Loop Root',
			'NodePromptText' => 'Now let\'s reveal important details of each event. Clicking the \'Next\' button below will take you through each event, in order.',
			'NodePromptNotes' => 'event-details',
			'NodeDataBranch' => 'Events',
			'NodeDataStore' => 'EventSequence:EveID',
			'NodeOpts' => '23'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 149,
			'NodeTree' => '1',
			'NodeParentID' => '148',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Stop',
			'NodePromptNotes' => 'great-job',
			'NodeDataBranch' => 'Stops'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 150,
			'NodeTree' => '1',
			'NodeParentID' => '148',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Search',
			'NodePromptNotes' => 'great-job',
			'NodeDataBranch' => 'Searches'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 151,
			'NodeTree' => '1',
			'NodeParentID' => '148',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Use of Force',
			'NodePromptNotes' => 'great-job',
			'NodeDataBranch' => 'Force'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 152,
			'NodeTree' => '1',
			'NodeParentID' => '148',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Arrest',
			'NodePromptNotes' => 'great-job',
			'NodeDataBranch' => 'Arrests'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 153,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeParentOrder' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Citations',
			'NodePromptNotes' => 'great-job'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 154,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '6',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Other Allegations',
			'NodePromptNotes' => 'allegation-neglect-of-duty'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 156,
			'NodeTree' => '1',
			'NodeParentID' => '419',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Submit Complaint',
			'NodePromptNotes' => 'confirm-complaint'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 157,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Tell Your Story',
			'NodePromptNotes' => 'share-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 158,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'When',
			'NodePromptNotes' => 'when'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 159,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Where',
			'NodePromptNotes' => 'where'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 160,
			'NodeTree' => '1',
			'NodeParentID' => '142',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<div class="f28 blk">Who\'s Involved: Police Officers</div>',
			'NodePromptNotes' => 'add-police-officers',
			'NodeDataBranch' => 'Officers',
			'NodeDataStore' => 'Officers:OffID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 161,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div id="fixedHeader"><h2>Officer #[LoopItemCnt]:</h2></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 162,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Which Police Department?',
			'NodeResponseSet' => '[Set:Departments;;HideIf:1]',
			'NodeDataStore' => 'Officers:OffDeptID',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 163,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What was this officer\'s role in the incident?',
			'NodeDataStore' => 'Officers:OffRole',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 164,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the time, this officer was...',
			'NodeDataStore' => 'Officers:OffDutyStatus',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 165,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know this officer\'s name, badge number, precinct, or rank?',
			'NodeDataStore' => 'Officers:OffGiveName',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 166,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeType' => 'Text',
			'NodePromptText' => 'First Name',
			'NodeDataStore' => 'PersonContact:PrsnNameFirst',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 167,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Last Name',
			'NodeDataStore' => 'PersonContact:PrsnNameLast',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 168,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Precinct/District/Division',
			'NodeDataStore' => 'Officers:OffPrecinct',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 169,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Badge Number',
			'NodeDataStore' => 'Officers:OffBadgeNumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 170,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Additional ID#?',
			'NodeDataStore' => 'Officers:OffIDnumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 171,
			'NodeTree' => '1',
			'NodeParentID' => '165',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Officer Rank',
			'NodeDataStore' => 'Officers:OffOfficerRank',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 172,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '6',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Gender',
			'NodeDataStore' => 'PhysicalDesc:PhysGender',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 173,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '7',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Age Range',
			'NodeDataStore' => 'PhysicalDesc:PhysAge',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 174,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '8',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Race',
			'NodeResponseSet' => 'Definition::Races',
			'NodeDataStore' => 'PhysicalDescRace:PhysRaceRace',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 176,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '10',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Would you like to give a physical description of this officer? Please do this if you are not sure about their name and badge number.',
			'NodeDataStore' => 'Officers:OffGivePhysDesc',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 177,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeType' => 'Feet Inches',
			'NodePromptText' => 'Height Estimate',
			'NodeDataStore' => 'PhysicalDesc:PhysHeight',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 178,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '1',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Body Type',
			'NodeResponseSet' => 'Definition::Body Types',
			'NodeDataStore' => 'PhysicalDesc:PhysBodyType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 179,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairDescription',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 180,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Facial Hair Description',
			'NodeDataStore' => 'PhysicalDesc:PhysHairFacialDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 181,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Eyes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysEyes',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 183,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'Distinguishing Marks',
			'NodeDataStore' => 'PhysicalDesc:PhysDistinguishingMarksDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 184,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'Voice Description',
			'NodeDataStore' => 'PhysicalDesc:PhysVoiceDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 185,
			'NodeTree' => '1',
			'NodeParentID' => '176',
			'NodeParentOrder' => '7',
			'NodeType' => 'Text',
			'NodePromptText' => 'Uniform/Clothes Description',
			'NodeDataStore' => 'PhysicalDesc:PhysClothesDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 187,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was this officer wearing a body camera?',
			'NodeDataStore' => 'Officers:OffBodyCam',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 188,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '11',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the beginning of the incident, was this officer in any type of vehicle?',
			'NodeDataStore' => 'Officers:OffHadVehicle',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 189,
			'NodeTree' => '1',
			'NodeParentID' => '589',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of vehicle was it?',
			'NodeResponseSet' => 'Definition::Transportation Officer',
			'NodeDataStore' => 'Vehicles:VehicTransportation',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 190,
			'NodeTree' => '1',
			'NodeParentID' => '589',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Description',
			'NodeDataStore' => 'Vehicles:VehicVehicleDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 191,
			'NodeTree' => '1',
			'NodeParentID' => '589',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'License Number',
			'NodeDataStore' => 'Vehicles:VehicVehicleLicence',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 192,
			'NodeTree' => '1',
			'NodeParentID' => '589',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Vehicle Number',
			'NodeDataStore' => 'Vehicles:VehicVehicleNumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 194,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '12',
			'NodeType' => 'Text',
			'NodePromptText' => 'Do you remember any more details to help identify this officer?',
			'NodeDataStore' => 'Officers:OffAdditionalDetails',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 196,
			'NodeTree' => '1',
			'NodeParentID' => '6',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'What Happened Gold Version',
			'NodePromptNotes' => 'great-job'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 198,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Stop',
			'NodePromptNotes' => 'allegation-stop'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 199,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Search',
			'NodePromptNotes' => 'allegation-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 200,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Use of Force',
			'NodePromptNotes' => 'allegation-use-of-force'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 201,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '4',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Arrest',
			'NodePromptNotes' => 'allegation-arrest'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 202,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeParentOrder' => '5',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Citations',
			'NodePromptNotes' => 'allegation-citation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 203,
			'NodeTree' => '1',
			'NodeParentID' => '466',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h1>Allegations</h1>
<p>Next, we will identify your allegations of police misconduct. These are your specific accusations that need to be investigated. The word "allegation" does not imply that your claims are true or false. Your complaint will be more trustworthy if you select allegations that match the facts.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 204,
			'NodeTree' => '1',
			'NodeParentID' => '467',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did an officer stop or detain anyone during this incident?</h2>
This includes all instances where officers pull over a vehicle or detain a pedestrian.',
			'NodeDataStore' => 'AllegSilver:AlleSilStopYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 205,
			'NodeTree' => '1',
			'NodeParentID' => '204',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do do you think anybody was stopped wrongfully?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Wrongful Stop: A complainant alleged that an officer detained him as he was sitting on a public bench.',
			'NodeDataStore' => 'AllegSilver:AlleSilStopWrongful',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 206,
			'NodeTree' => '1',
			'NodeParentID' => '450',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 207,
			'NodeTree' => '1',
			'NodeParentID' => '450',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 208,
			'NodeTree' => '1',
			'NodeParentID' => '450',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that this stop was wrongful?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 209,
			'NodeTree' => '1',
			'NodeParentID' => '468',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did anybody ask for an officer\'s identification?</h2>',
			'NodeDataStore' => 'AllegSilver:AlleSilOfficerID',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 210,
			'NodeTree' => '1',
			'NodeParentID' => '209',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did an officer refuse to provide identification?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodeDataStore' => 'AllegSilver:AlleSilOfficerRefuseID',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 211,
			'NodeTree' => '1',
			'NodeParentID' => '537',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 212,
			'NodeTree' => '1',
			'NodeParentID' => '469',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did an officer search anyone during this incident?</h2>
This includes all instances of vehicle searches, home, person, or other property searches and confiscations.',
			'NodeDataStore' => 'AllegSilver:AlleSilSearchYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 213,
			'NodeTree' => '1',
			'NodeParentID' => '212',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do do you think anybody was searched wrongfully?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Wrongful Search: A motorist alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.',
			'NodeDataStore' => 'AllegSilver:AlleSilSearchWrongful',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 214,
			'NodeTree' => '1',
			'NodeParentID' => '538',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 215,
			'NodeTree' => '1',
			'NodeParentID' => '538',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 216,
			'NodeTree' => '1',
			'NodeParentID' => '538',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that this search was wrongful?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 217,
			'NodeTree' => '1',
			'NodeParentID' => '470',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Was any property seized or damaged?</h2>
<i>(This does not include illegal items.)</i>',
			'NodeDataStore' => 'AllegSilver:AlleSilPropertyYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 218,
			'NodeTree' => '1',
			'NodeParentID' => '217',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think this property was wrongfully seized or damaged?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Wrongful Seizure/Damage: A complainant alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.',
			'NodeDataStore' => 'AllegSilver:AlleSilPropertyWrongful',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 219,
			'NodeTree' => '1',
			'NodeParentID' => '539',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 220,
			'NodeTree' => '1',
			'NodeParentID' => '539',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 221,
			'NodeTree' => '1',
			'NodeParentID' => '539',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that this property seizure or damage was wrongful?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 222,
			'NodeTree' => '1',
			'NodeParentID' => '471',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did an officer use physical force against anyone during this incident?</h2>
This includes any use of violent contact up to and including deadly force by an officer. <b class="slBlueDark">This does not include sexual assault,</b> which we will ask about later.',
			'NodeDataStore' => 'AllegSilver:AlleSilForceYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 223,
			'NodeTree' => '1',
			'NodeParentID' => '222',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="jumbotron blk" style="padding: 5px 20px;"><b>Definition of <span class="slBlueDark">"Reasonable Force"</span>:</b><br />
The proper amount of effort needed by an officer to control someone\'s actions when it\'s lawfully required to do so.</div>
<h2>Do you think the use of physical force on someone was <span class="slBlueDark">unreasonable</span>?</h2>
<div class="allegation">This Is A Serious Allegation.</div>',
			'NodePromptNotes' => 'Example of Unreasonable Force: A woman accidentally drove into an area during road construction. An officer who was directing traffic approached her and yelled at her to get off the road. He then allegedly put his hand through her open window, and twisted her arm until she moved her car.',
			'NodeDataStore' => 'AllegSilver:AlleSilForceUnreason',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 224,
			'NodeTree' => '1',
			'NodeParentID' => '540',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 225,
			'NodeTree' => '1',
			'NodeParentID' => '540',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 226,
			'NodeTree' => '1',
			'NodeParentID' => '540',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that this use of physical force was unreasonable?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 227,
			'NodeTree' => '1',
			'NodeParentID' => '472',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did an officer arrest anyone during this incident?</h2> 
This means the officers took somebody to the police station.',
			'NodeDataStore' => 'AllegSilver:AlleSilArrestYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 228,
			'NodeTree' => '1',
			'NodeParentID' => '227',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do do you think anybody was arrested wrongfully?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Wrongful Arrest: A judge ordered the City of New York to pay Robert Bell $20,000. Bell was unlawfully arrested after giving the finger to three NYPD officers.',
			'NodeDataStore' => 'AllegSilver:AlleSilArrestWrongful',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 229,
			'NodeTree' => '1',
			'NodeParentID' => '541',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 230,
			'NodeTree' => '1',
			'NodeParentID' => '541',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 231,
			'NodeTree' => '1',
			'NodeParentID' => '541',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that their arrest was wrongful?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 232,
			'NodeTree' => '1',
			'NodeParentID' => '611',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did the officer fail to read any arrestees their Miranda rights?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodeDataStore' => 'AllegSilver:AlleSilArrestMiranda',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 233,
			'NodeTree' => '1',
			'NodeParentID' => '542',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 234,
			'NodeTree' => '1',
			'NodeParentID' => '473',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Did anyone get a ticket or citation?</h2>',
			'NodeDataStore' => 'AllegSilver:AlleSilCitationYN',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 235,
			'NodeTree' => '1',
			'NodeParentID' => '234',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think the citations filed against anyone were wrongful or excessive?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Excessive Citation: A motorist gets pulled over and cited for speeding. On the same ticket, the officer also cites him for "illegal window tint," "muffler violation," "seat belt violation," and "illegal lane change."',
			'NodeDataStore' => 'AllegSilver:AlleSilCitationExcessive',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 236,
			'NodeTree' => '1',
			'NodeParentID' => '543',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 237,
			'NodeTree' => '1',
			'NodeParentID' => '543',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 238,
			'NodeTree' => '1',
			'NodeParentID' => '543',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that these citations were excessive?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 240,
			'NodeTree' => '1',
			'NodeParentID' => '474',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think an officer <span class="slBlueDark">took actions</span> which did not follow appropriate policy or procedure?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Procedure Violation: An officer parks an official police vehicle in a handicap parking spot. There did not seem to be any emergency to justify this.',
			'NodeDataStore' => 'AllegSilver:AlleSilProcedure',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 241,
			'NodeTree' => '1',
			'NodeParentID' => '544',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 242,
			'NodeTree' => '1',
			'NodeParentID' => '544',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> actions do you think weren\'t appropriate?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 243,
			'NodeTree' => '1',
			'NodeParentID' => '476',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think an officer used a weapon for intimidation without violent contact?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Weapon Intimidation: An officer pointed a taser at someone while questioning them.',
			'NodeDataStore' => 'AllegSilver:AlleSilIntimidatingWeapon'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 244,
			'NodeTree' => '1',
			'NodeParentID' => '546',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 245,
			'NodeTree' => '1',
			'NodeParentID' => '546',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Against Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 246,
			'NodeTree' => '1',
			'NodeParentID' => '546',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>What Type Of Weapon?</h2>',
			'NodeResponseSet' => 'Definition::Intimidation Weapons',
			'NodeDataStore' => 'AllegSilver:AlleSilIntimidatingWeaponType',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 247,
			'NodeTree' => '1',
			'NodeParentID' => '546',
			'NodeParentOrder' => '3',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that the officer used a weapon for intimidation?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 248,
			'NodeTree' => '1',
			'NodeParentID' => '477',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think an officer sexually assaulted someone during the incident?</h2>
Sexual assault is any sexual act in which a person is forced to engage against their will. This includes any non-consensual sexual touching.
<div class="allegation">This Is A Serious Allegation.</div>',
			'NodePromptNotes' => 'Example of Sexual Assault: An officer placed his hands down a motorist\'s pants, shifting his genitals. He said he was looking for drugs.',
			'NodeDataStore' => 'AllegSilver:AlleSilSexualAssault',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 249,
			'NodeTree' => '1',
			'NodeParentID' => '547',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 250,
			'NodeTree' => '1',
			'NodeParentID' => '547',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 251,
			'NodeTree' => '1',
			'NodeParentID' => '547',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that a sexual assault occurred? We understand that this isn\'t easy, but please provide as much detail as you can.</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 252,
			'NodeTree' => '1',
			'NodeParentID' => '478',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think the officer was policing based on bias?</h2>
An officer\'s conduct was based on a person\'s race, religion, age, gender, sexual orientation, or disability, etc.
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Bias-Based Policing: An officer stops a black man driving in a primarily white neighborhood. The officer claimed he fit the description of a suspect.',
			'NodeDataStore' => 'AllegSilver:AlleSilBias',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 253,
			'NodeTree' => '1',
			'NodeParentID' => '548',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 254,
			'NodeTree' => '1',
			'NodeParentID' => '548',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 255,
			'NodeTree' => '1',
			'NodeParentID' => '548',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that the officer\'s conduct was biased?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 256,
			'NodeTree' => '1',
			'NodeParentID' => '479',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think any officers used force or made arrests as an act of retaliation?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Retaliation: A woman asserts her first-amendment rights by video recording on-duty police. An officer arrests her after she refuses to turn off her camera.',
			'NodeInternalNotes' => '*Note: Keeping this general. Not enough value in associating these unprovable claims with specific Force or Arrest records.',
			'NodeDataStore' => 'AllegSilver:AlleSilRetaliation',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 257,
			'NodeTree' => '1',
			'NodeParentID' => '549',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 258,
			'NodeTree' => '1',
			'NodeParentID' => '549',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 259,
			'NodeTree' => '1',
			'NodeParentID' => '549',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that this was an act of retaliation?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 260,
			'NodeTree' => '1',
			'NodeParentID' => '480',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think an officer\'s conduct was improper or unbecoming?</h2>
This includes on-duty or off-duty conduct that is unprofessional or reflects poorly on the department or police in general.
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Conduct Unbecoming: A complainant alleged that an officer routinely gets intoxicated and at a local bar and threatens people while flashing his badge.',
			'NodeInternalNotes' => '*Statistics Note: These totals are only out of complaints offered this question.',
			'NodeDataStore' => 'AllegSilver:AlleSilUnbecoming',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 261,
			'NodeTree' => '1',
			'NodeParentID' => '481',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Was an officer discourteous in ways not included in other allegations?</h2>
The officer used profane or derogatory language, wasn\'t tactful, lost his/her temper, made verbal threats, became impatient, or was otherwise discourteous.
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Discourtesy: An officer allegedly directed vulgar language at a complainant.',
			'NodeInternalNotes' => '*Statistics Note: These totals are only out of complaints offered this question.',
			'NodeDataStore' => 'AllegSilver:AlleSilDiscourteous',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 262,
			'NodeTree' => '1',
			'NodeParentID' => '550',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 263,
			'NodeTree' => '1',
			'NodeParentID' => '551',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 264,
			'NodeTree' => '1',
			'NodeParentID' => '550',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that the conduct was unbecoming:</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 265,
			'NodeTree' => '1',
			'NodeParentID' => '551',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that these actions were discourteous:</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 267,
			'NodeTree' => '1',
			'NodeParentID' => '526',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<div class="nPromptHeader">Review Your Story</div>

Your complaint will be submitted to official police oversight agencies. So please try to make your spelling and grammar perfect.

Pro-Tips
    Focus your story around your allegations and the details below.
    Make sure the names of people in your story match their names as they appear below. For example, if you don\'t know an officer\'s name, write them as "Officer #1" or "Officer #2".',
			'NodePromptAfter' => '<style> #n267fldID { height: 300px; } #wordCnt, #narrativeTimer { font-size: 18px; margin-right: 50px; } </style>
<div id="wordCnt" class="fL"></div>
<div id="narrativeTimer" class="fL"></div>
<div class="fC"></div>
<div class="gry9">Keep this as professional as possible.<br />Do not use ALL CAPS, excessive exclamation points, etc.</div>
<script type="text/javascript">
function fldOnKeyUp[[nID]]() {
  var cnt = getWordCnt(document.getElementById(\'n[[nID]]fldID\'));
  var cntWords = \'<span class="slRedLight">\'+cnt+\' words</span>\';
  if (cnt >= 250 && cnt <= 500) cntWords = \'<span class="slBlueLight">\'+cnt+\' words</span>\';
  document.getElementById(\'wordCnt\').innerHTML=cntWords+\' <span class="gry9 f14"><i>(400 recommended)</i></span>\';
  return true;
}
setTimeout("fldOnKeyUp[[nID]]()", 1000);
var timeCnt = 0;
function reloadTimer() {
  if (timeCnt%60 == 0) {
    var cntWords = \'<span class="slRedLight">\'+Math.floor(timeCnt/60)+\' minutes</span>\';
    if (timeCnt >= 180 && timeCnt <= 360) cntWords = \'<span class="slBlueLight">\'+Math.floor(timeCnt/60)+\' minutes</span>\';
    document.getElementById(\'narrativeTimer\').innerHTML=cntWords+\' <span class="gry9 f14"><i>(5 recommended)</i></span>\';
  }
  timeCnt++;
  setTimeout("reloadTimer()", 1000);
  return true;
}
setTimeout("reloadTimer()", 1000);
</script>',
			'NodeDataStore' => 'Complaints:ComSummary'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 268,
			'NodeTree' => '1',
			'NodeParentID' => '452',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Is anyone involved in this event now under arrest, OR has anyone been charged with a crime?',
			'NodeDataStore' => 'Complaints:ComAnyoneCharged',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 269,
			'NodeTree' => '1',
			'NodeParentID' => '528',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Confirm Your Complaint

Below is a preview of your finished complaint. This is what police investigators will see.

{ If Full Transparency... }
Remember that we will never publish anyone\'s private information. This includes addresses, phone numbers, emails, etc.

{ Otherwise... }
Remember that we will not publish anything that could be used for personal identification. This includes your story and all open-ended questions.

{ Full Complaint }

I want to submit my complaint to the appropriate police oversight agencies. I also want to publish my complaint to this website.

I hereby certify that the information in this complaint is true and correct to the best of my knowledge and belief.',
			'NodePromptAfter' => '<div class="p20"></div>',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 270,
			'NodeTree' => '1',
			'NodeParentID' => '529',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="nPromptHeader">Complaint Submitted!</div>
<i>This should actually forward to the finished complaint with these links at the top, as well as automatically suggested links to Flex articles.</i><br /><br />

Amazing job! Thank you so much for sharing your story. You should receive emails regarding the status of submitting your complaint to an appropriate police department oversight agency.

<a href="https://app.openpolicecomplaints.org/report/" target="_blank" class="facebookShareBig"><div class="disIn f32 pR5"><i class="fa fa-file-text"></i></div> View Your Story</a>
<div class="p20"></div>
<a href="#" class="facebookShareBig"><div class="disIn f32 pR5"><i class="fa fa-facebook-square"></i></div> Share Your Story Facebook</a>
<a href="https://app.openpolicecomplaints.org/report/" target="_blank" class="facebookShareBig"><div class="disIn f32 pR5"><i class="fa fa-print"></i></div> Print Your Complaint</a>
<div class="p20"></div>
<a href="#" class="facebookShareBig"><div class="disIn f32 pR5"><i class="fa fa-floppy-o"></i></div> Save Your Complaint</a>
<div class="p20"></div>
<a href="/auth/logout" class="facebookShareBig"><div class="disIn f32 pR5"><i class="fa fa-sign-out"></i></div> Logout</a>
<div class="p20"></div>
<a href="#" class="facebookShareBig" target="_blank"><div class="disIn f32 pR5"><i class="fa fa-facebook-square"></i></div> Share On Police Department\'s Facebook Page</a>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 271,
			'NodeTree' => '1',
			'NodeParentID' => '550',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 272,
			'NodeTree' => '1',
			'NodeParentID' => '551',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 273,
			'NodeTree' => '1',
			'NodeParentID' => '544',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 275,
			'NodeTree' => '1',
			'NodeParentID' => '457',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Where did this incident begin?',
			'NodeResponseSet' => 'Definition::Scene Type',
			'NodeDataStore' => 'Scenes:ScnType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 279,
			'NodeTree' => '1',
			'NodeParentID' => '457',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Please use a few words to describe the scene? (e.g. "side of highway," "inside a mall," or "an outdoor protest")',
			'NodeDataStore' => 'Scenes:ScnDescription',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 280,
			'NodeTree' => '1',
			'NodeParentID' => '608',
			'NodeParentOrder' => '1',
			'NodeType' => 'Uploads',
			'NodePromptText' => 'Would you like to upload any images, diagrams, videos, or official police reports to further describe the scene?',
			'NodeDataStore' => 'Evidence:EvidID',
			'NodeCharLimit' => '5',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 281,
			'NodeTree' => '1',
			'NodeParentID' => '457',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were there any video surveillance cameras on the scene? These might be able to provide valuable evidence.',
			'NodeDataStore' => 'Scenes:ScnCCTV',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 282,
			'NodeTree' => '1',
			'NodeParentID' => '281',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe cameras that might have recorded the incident.',
			'NodeDataStore' => 'Scenes:ScnCCTVDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 285,
			'NodeTree' => '1',
			'NodeParentID' => '484',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => 'What Happened? Did an officer pull over a vehicle, detain, or frisk you? Did they search a vehicle, home, person, or property? Or was any property seized? Did an officer use any weapons or physical force against you? Against A Pet or Other Animal? Did an officer take you into custody or jail? Citation? Written Warning? None? What type of physical force was used? Control Hold, Body Weapons, Takedown, Baton Strike, Taser, Gun, Mace or Pepper Spray, K9 (Dog) Bite, Vehicle, Other?',
			'NodeInternalNotes' => 'This node is actually hard-coded in class-tree-OPC.php, not auto-generated, because it is both not stored in the database, and the language is conditional on the scene.'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 286,
			'NodeTree' => '1',
			'NodeParentID' => '483',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="jumbotron" style="margin-bottom: -40px;">
<h2 class="pB20">Next, you will go through important aspects of this incident and provide more details about what exactly happened.</h2>
<p>You might have already touched on some of the following questions. But the more details you provide for these questions, the stronger your complaint will become.</p></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 288,
			'NodeTree' => '1',
			'NodeParentID' => '485',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<h2>Please drag the events below into the order they happened.</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 289,
			'NodeTree' => '1',
			'NodeParentID' => '486',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>',
			'NodePromptNotes' => '[[MergeVictimsEventSequence]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 290,
			'NodeTree' => '1',
			'NodeParentID' => '494',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Search/Seizure of [SetCivLabel]:</div>',
			'NodePromptNotes' => '[[MergeVictimsEventSequence]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 291,
			'NodeTree' => '1',
			'NodeParentID' => '496',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Force against [SetCivLabel]:</div>',
			'NodePromptNotes' => '[[MergeVictimsEventSequence]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 292,
			'NodeTree' => '1',
			'NodeParentID' => '497',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Arrest of [SetCivLabel]:</div>',
			'NodePromptNotes' => '[[MergeVictimsEventSequence]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 293,
			'NodeTree' => '1',
			'NodeParentID' => '499',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which officer(s) arrested [SetCivLabel]?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerEvents:LnkOffEveOffID',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 294,
			'NodeTree' => '1',
			'NodeParentID' => '498',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which officer(s) used [ForceType] force against [SetCivLabel]?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerEvents:LnkOffEveOffID',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 295,
			'NodeTree' => '1',
			'NodeParentID' => '495',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which officer(s) searched [SetCivLabel]?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerEvents:LnkOffEveOffID',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 296,
			'NodeTree' => '1',
			'NodeParentID' => '487',
			'NodeType' => 'Checkbox',
			'NodePromptText' => '<div class="disIn nPromptHeader">Stop/Questioning of [SetCivLabel]:</div><div>Which officer(s) stopped [SetCivLabel]?</div>',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerEvents:LnkOffEveOffID',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 297,
			'NodeTree' => '1',
			'NodeParentID' => '488',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>Did an officer give a reason for the stop of [SetCivLabel]?',
			'NodeResponseSet' => 'Definition::Reason for Vehicle Stop',
			'NodeDataStore' => 'StopReasons:StopReasReason'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 298,
			'NodeTree' => '1',
			'NodeParentID' => '297',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the stated reason.',
			'NodeDataStore' => 'Stops:StopStatedReasonDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 299,
			'NodeTree' => '1',
			'NodeParentID' => '488',
			'NodeType' => 'Checkbox',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>Did an officer give a reason for the stop of [SetCivLabel]?',
			'NodeResponseSet' => 'Definition::Reason for Pedestrian Stop',
			'NodeDataStore' => 'StopReasons:StopReasReason'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 300,
			'NodeTree' => '1',
			'NodeParentID' => '299',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the stated reason.',
			'NodeDataStore' => 'Stops:StopStatedReasonDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 301,
			'NodeTree' => '1',
			'NodeParentID' => '488',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] ask to leave?',
			'NodeInternalNotes' => 'NOT Home or Private Residence, or Workplace',
			'NodeDataStore' => 'Stops:StopSubjectAskedToLeave',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 302,
			'NodeTree' => '1',
			'NodeParentID' => '301',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe what [SetCivLabel] asked.',
			'NodeDataStore' => 'Stops:StopSubjectStatementsDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 303,
			'NodeTree' => '1',
			'NodeParentID' => '489',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>Did an officer ask for [SetCivLabel]\'s ID?',
			'NodeDataStore' => 'Stops:StopRequestID',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 304,
			'NodeTree' => '1',
			'NodeParentID' => '303',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] refuse to provide ID to an officer?',
			'NodeDataStore' => 'Stops:StopRefuseID',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 305,
			'NodeTree' => '1',
			'NodeParentID' => '489',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] ask for an officer\'s ID?',
			'NodeDataStore' => 'Stops:StopRequestOfficerID',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 306,
			'NodeTree' => '1',
			'NodeParentID' => '305',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer refuse to provide ID?
<div class="allegation">This Is An Allegation.</div>',
			'NodeDataStore' => 'Stops:StopOfficerRefuseID',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 307,
			'NodeTree' => '1',
			'NodeParentID' => '490',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>Did an officer enter a private home or workplace?',
			'NodeInternalNotes' => 'Home or Private Residence, or Workplace',
			'NodeDataStore' => 'Stops:StopEnterPrivateProperty',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 308,
			'NodeTree' => '1',
			'NodeParentID' => '307',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer request permission or have a warrant to enter?',
			'NodeDataStore' => 'Stops:StopPermissionEnter',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 309,
			'NodeTree' => '1',
			'NodeParentID' => '308',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe what happened.',
			'NodeDataStore' => 'Stops:StopEnterPrivatePropertyDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 310,
			'NodeTree' => '1',
			'NodeParentID' => '308',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did someone grant permission for an officer to enter?',
			'NodeDataStore' => 'Stops:StopPermissionEnterGranted',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 311,
			'NodeTree' => '1',
			'NodeParentID' => '310',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer enter anyway without a warrant?
<div class="allegation">This Is An Allegation.</div>',
			'NodeDataStore' => 'Stops:StopAllegWrongfulEntry',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 312,
			'NodeTree' => '1',
			'NodeParentID' => '561',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Describe what happened.',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 313,
			'NodeTree' => '1',
			'NodeParentID' => '491',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>
Did officers ask any other <b>questions</b> or give other <b>orders</b> during this stop? For example, "Step out of the vehicle." Or "Where are you going?" Try to use the exact words the officer used.',
			'NodePromptNotes' => '[[OfficerOrders]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 314,
			'NodeTree' => '1',
			'NodeParentID' => '492',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">Stop/Questioning of [SetCivLabel]:</div>Was [SetCivLabel] frisked during this stop?',
			'NodeDataStore' => 'Stops:StopSubjectFrisk',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 315,
			'NodeTree' => '1',
			'NodeParentID' => '492',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => '<br />Was [SetCivLabel] handcuffed during this stop?',
			'NodeDataStore' => 'Stops:StopSubjectHandcuffed',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 316,
			'NodeTree' => '1',
			'NodeParentID' => '315',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was [SetCivLabel] injured from being handcuffed?',
			'NodeDataStore' => 'Stops:StopStopSubjectHandcuffInjYN',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 317,
			'NodeTree' => '1',
			'NodeParentID' => '316',
			'NodeType' => 'Uploads',
			'NodePromptText' => 'Upload Injury Photos, Videos, or Other Documents',
			'NodeDataStore' => 'Stops:StopID',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 318,
			'NodeTree' => '1',
			'NodeParentID' => '493',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you think [SetCivLabel] was wrongfully stopped or questioned?
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Wrongful Stop: A complainant alleged that an officer detained him as he was sitting on a public bench.',
			'NodeDataStore' => 'Stops:StopAllegWrongfulStop',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 319,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer give a reason for searching [SetCivLabel]?',
			'NodeDataStore' => 'Searches:SrchStatedReason',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 320,
			'NodeTree' => '1',
			'NodeParentID' => '319',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the stated reason.',
			'NodeDataStore' => 'Searches:SrchStatedReasonDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 321,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeType' => 'Instructions',
			'NodePromptText' => 'Search/Seizure of [SetCivLabel]:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 322,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer have a search warrant?',
			'NodeDataStore' => 'Searches:SrchOfficerWarrant',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 323,
			'NodeTree' => '1',
			'NodeParentID' => '322',
			'NodeType' => 'Text',
			'NodePromptText' => 'What did the warrant say?',
			'NodeDataStore' => 'Searches:SrchOfficerWarrantSay',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 324,
			'NodeTree' => '1',
			'NodeParentID' => '322',
			'NodeParentOrder' => '1',
			'NodeType' => 'Uploads',
			'NodePromptText' => 'Upload Warrant Photo, Scan, or PDF',
			'NodeDataStore' => 'EventSequence:EveID',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 325,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer request permission to search anything?',
			'NodeDataStore' => 'Searches:SrchOfficerRequest',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 327,
			'NodeTree' => '1',
			'NodeParentID' => '325',
			'NodeType' => 'Text',
			'NodePromptText' => 'What did the officer say or do?',
			'NodeDataStore' => 'Searches:SrchOfficerRequestDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 328,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] consent to the search?',
			'NodeDataStore' => 'Searches:SrchSubjectConsent',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 329,
			'NodeTree' => '1',
			'NodeParentID' => '328',
			'NodeType' => 'Text',
			'NodePromptText' => 'What did [SetCivLabel] say or do?',
			'NodeDataStore' => 'Searches:SrchSubjectSay',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 330,
			'NodeTree' => '1',
			'NodeParentID' => '500',
			'NodeParentOrder' => '5',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer make threats or lie to get permission to search?',
			'NodeDataStore' => 'Searches:SrchOfficerThreats',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 331,
			'NodeTree' => '1',
			'NodeParentID' => '330',
			'NodeType' => 'Text',
			'NodePromptText' => 'What did the officer say or do?',
			'NodeDataStore' => 'Searches:SrchOfficerThreatsDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 332,
			'NodeTree' => '1',
			'NodeParentID' => '501',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Search/Seizure of [SetCivLabel]:</div>
Did officers ask any other <b>questions</b> or give other <b>orders</b> during this search of [SetCivLabel]? For example, "What\'s in your bag? Open it up." Try to use the exact words the officer used.',
			'NodePromptNotes' => '[[OfficerOrders]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 333,
			'NodeTree' => '1',
			'NodeParentID' => '503',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you think [SetCivLabel] was wrongfully searched?
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example: A motorist alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.',
			'NodeDataStore' => 'Searches:SrchAllegWrongfulSearch',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 334,
			'NodeTree' => '1',
			'NodeParentID' => '553',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that this search was wrongful?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 335,
			'NodeTree' => '1',
			'NodeParentID' => '502',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">Search of [SetCivLabel]:</div>
Was a K9 (dog) used during this search?',
			'NodeDataStore' => 'Searches:SrchK9sniff',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 336,
			'NodeTree' => '1',
			'NodeParentID' => '502',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nodeGap"></div>Was [SetCivLabel] strip searched during this incident? (Please do not include searches that occurred at the police station.)',
			'NodeDataStore' => 'Searches:SrchStrip',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 337,
			'NodeTree' => '1',
			'NodeParentID' => '336',
			'NodeType' => 'Text',
			'NodePromptText' => 'We understand that this isn\'t easy, but please provide as much detail as you can about the strip search.',
			'NodeDataStore' => 'Searches:SrchStripSearchDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 338,
			'NodeTree' => '1',
			'NodeParentID' => '504',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">Search of [SetCivLabel]:</div>
Was any contraband discovered on [SetCivLabel]?',
			'NodeDataStore' => 'Searches:SrchContrabandDiscovered',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 339,
			'NodeTree' => '1',
			'NodeParentID' => '338',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Select the items that were found:',
			'NodeResponseSet' => 'Definition::Contraband Types',
			'NodeDataStore' => 'SearchContra:SrchConType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 342,
			'NodeTree' => '1',
			'NodeParentID' => '507',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">[ForceType] Force used on [SetCivLabel]:</div>
Did officers give any other <b>orders</b> before or during this use of force? For example, "Stop resisting!" Try to use the exact words the officer used.',
			'NodePromptNotes' => '[[OfficerOrders]]',
			'NodeInternalNotes' => 'This version of Orders should include "Did recipient have trouble hearing order?"',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 343,
			'NodeTree' => '1',
			'NodeParentID' => '508',
			'NodeType' => 'Instructions',
			'NodePromptText' => '[ForceType] Force used on [SetCivLabel]:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 344,
			'NodeTree' => '1',
			'NodeParentID' => '508',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What type(s) of control holds were used?',
			'NodeResponseSet' => 'Definition::Force Type - Control Hold',
			'NodeDataStore' => 'ForceSubType:ForceSubType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 345,
			'NodeTree' => '1',
			'NodeParentID' => '508',
			'NodeParentOrder' => '2',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What type(s) of body weapons were used?',
			'NodeResponseSet' => 'Definition::Force Type - Body Weapons',
			'NodeDataStore' => 'ForceSubType:ForceSubType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 346,
			'NodeTree' => '1',
			'NodeParentID' => '508',
			'NodeParentOrder' => '3',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What type(s) of takedowns were used?',
			'NodeResponseSet' => 'Definition::Force Type - Takedown',
			'NodeDataStore' => 'ForceSubType:ForceSubType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 347,
			'NodeTree' => '1',
			'NodeParentID' => '508',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the gun the best that you can.',
			'NodeDataStore' => 'Force:ForGunDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 348,
			'NodeTree' => '1',
			'NodeParentID' => '347',
			'NodeType' => 'Radio',
			'NodePromptText' => '<br />If known, what type of ammo was used?',
			'NodeResponseSet' => 'Definition::Gun Ammo Types',
			'NodeDataStore' => 'Force:ForGunAmmoType',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 349,
			'NodeTree' => '1',
			'NodeParentID' => '509',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text:Number',
			'NodePromptText' => 'How many times was [SetCivLabel] struck with [ForceType] force?
<style> #n349fldID { width: 60px; } </style>',
			'NodeDataStore' => 'Force:ForHowManyTimes'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 350,
			'NodeTree' => '1',
			'NodeParentID' => '509',
			'NodeParentOrder' => '4',
			'NodeType' => 'Checkbox',
			'NodePromptText' => '<div class="pT20">Which part(s) of the body was struck?</div>',
			'NodePromptNotes' => '[[BodyClicker]]',
			'NodeDataStore' => 'BodyParts:BodyPart',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 351,
			'NodeTree' => '1',
			'NodeParentID' => '509',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was [SetCivLabel] <span class="blk"><b>handcuffed</b></span> when [ForceType] force was used?',
			'NodeDataStore' => 'Force:ForWhileHandcuffed',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 352,
			'NodeTree' => '1',
			'NodeParentID' => '509',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="pT20">Was [SetCivLabel] <span class="blk"><b>held down</b></span> when [ForceType] force was used?</div>',
			'NodeDataStore' => 'Force:ForWhileHeldDown',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 353,
			'NodeTree' => '1',
			'NodeParentID' => '511',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="pL20 pB20 pR20 mTn20"><span class="blk"><b><i>Definition of Reasonable Force:</i></b></span> The proper amount of effort needed by an officer to control someone\'s actions when it\'s lawfully required to do so.</div>
Do you think the use of [ForceType] force on [SetCivLabel] was <span class="blk"><b>unreasonable</b></span>?
<div class="allegation">This Is A Serious Allegation.</div>',
			'NodeDataStore' => 'Force:ForAllegUnreasonable',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 354,
			'NodeTree' => '1',
			'NodeParentID' => '511',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<a href="#" id="forceExample"><i>Click here for an example.</i></a><div id="forceExampleTxt" class="disNon"><i>Example:</i> A woman accidentally drove into an area during road construction. An officer who was directing traffic approached her and yelled at her to get off the road. He then allegedly put his hand through her open window, and twisted her arm until she moved her car.</div>
<br /><i>Note: There is a separate question regarding sexual assault later.</i>

<script type="text/javascript"> $(document).ready(function(){ $("#forceExample").click(function(){ $("#forceExampleTxt").slideToggle("slow"); }); }); </script>',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 355,
			'NodeTree' => '1',
			'NodeParentID' => '511',
			'NodeType' => 'Instructions',
			'NodePromptText' => '[ForceType] Force used on [SetCivLabel]:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 356,
			'NodeTree' => '1',
			'NodeParentID' => '555',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that this force was unreasonable?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 357,
			'NodeTree' => '1',
			'NodeParentID' => '410',
			'NodeParentOrder' => '1',
			'NodeType' => 'Loop Root',
			'NodePromptText' => '<div class="nPromptHeader">Revealing important details of each person\'s injuries.</div> Clicking the \'Next\' button below will step you through one injury at a time...',
			'NodePromptNotes' => 'all-injuries',
			'NodeDataBranch' => 'Injuries',
			'NodeDataStore' => 'Injuries:InjID',
			'NodeOpts' => '23'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 358,
			'NodeTree' => '1',
			'NodeParentID' => '359',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the injury more, if needed.',
			'NodeDataStore' => 'Injuries:InjDescription',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 359,
			'NodeTree' => '1',
			'NodeParentID' => '518',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">[InjuryType] Injuries of [LoopItemLabel]:</div>
Where on the body did these injuries happen?',
			'NodePromptNotes' => '[[BodyClicker]]',
			'NodeInternalNotes' => '"Where did these injuries happen?" (click areas of body)
"Please upload any injury photos available:" (Upload Tools) ("Limit of " displayed after 1)
"Describe the injury more, if needed:" (Text Field)',
			'NodeDataStore' => 'BodyParts:BodyPart'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 362,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [LoopItemLabel]\'s injuries result in death?',
			'NodeDataStore' => 'InjuryCare:InjCareResultInDeath',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 363,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeType' => 'Instructions',
			'NodePromptText' => '[LoopItemLabel]\'s Medical Care:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 364,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Name of hospital where treated:',
			'NodeDataStore' => 'InjuryCare:InjCareHospitalTreated',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 365,
			'NodeTree' => '1',
			'NodeParentID' => '362',
			'NodeType' => 'Date Time',
			'NodePromptText' => 'When was the date and time of death?',
			'NodeDataStore' => 'InjuryCare:InjCareTimeOfDeath',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 366,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Doctor First Name',
			'NodeDataStore' => 'InjuryCare:InjCareDoctorNameFirst',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 367,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Doctor Last Name',
			'NodeDataStore' => 'InjuryCare:InjCareDoctorNameLast',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 368,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '5',
			'NodeType' => 'Email',
			'NodePromptText' => 'Doctor Email',
			'NodeDataStore' => 'InjuryCare:InjCareDoctorEmail',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 369,
			'NodeTree' => '1',
			'NodeParentID' => '520',
			'NodeParentOrder' => '6',
			'NodeType' => 'Text',
			'NodePromptText' => 'Doctor Phone',
			'NodeDataStore' => 'InjuryCare:InjCareDoctorPhone',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 370,
			'NodeTree' => '1',
			'NodeParentID' => '521',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were any medical emergency staff on scene?',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyOnScene',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 371,
			'NodeTree' => '1',
			'NodeParentID' => '522',
			'NodeType' => 'Uploads',
			'NodePromptText' => 'Please upload any medical documents related to these injuries. PDF documents are best. But you can also upload scans or photos of paper documents. Only share things that you are comfortable with investigators seeing. Do not upload anybody else\'s private information without their permission.',
			'NodeDataStore' => 'InjuryCare:InjCareID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 372,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeType' => 'Text',
			'NodePromptText' => 'Emergency Staff Department Name',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyDeptName',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 373,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Staff First Name',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyNameFirst',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 374,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'Staff Last Name',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyNameLast',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 375,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeParentOrder' => '3',
			'NodeType' => 'Text',
			'NodePromptText' => 'Emergency Staff ID#',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyIDnumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 376,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Vehicle Number',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyVehicleNumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 377,
			'NodeTree' => '1',
			'NodeParentID' => '370',
			'NodeParentOrder' => '5',
			'NodeType' => 'Text',
			'NodePromptText' => 'License Plate Number',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyLicenceNumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 378,
			'NodeTree' => '1',
			'NodeParentID' => '512',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="mBn20">Arrest of [SetCivLabel]:</div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 379,
			'NodeTree' => '1',
			'NodeParentID' => '512',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer say why they arrested [SetCivLabel]?',
			'NodeDataStore' => 'Arrests:ArstStatedReason',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 380,
			'NodeTree' => '1',
			'NodeParentID' => '379',
			'NodeType' => 'Text',
			'NodePromptText' => 'What reason did they give?',
			'NodeDataStore' => 'Arrests:ArstStatedReasonDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 381,
			'NodeTree' => '1',
			'NodeParentID' => '512',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did the officer read [SetCivLabel]\'s Miranda rights?
<div class="allegation">This Is An Allegation.</div>',
			'NodeDataStore' => 'Arrests:ArstMiranda',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 382,
			'NodeTree' => '1',
			'NodeParentID' => '513',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Arrest of [SetCivLabel]:</div>
Did officers ask more <b>questions, give orders, or make any threats</b> during or after this arrest? Try to use the exact words the officer used.',
			'NodePromptNotes' => '[[OfficerOrders]]',
			'NodeDataStore' => 'EventSequence:EveID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 383,
			'NodeTree' => '1',
			'NodeParentID' => '514',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do do you think [SetCivLabel] was wrongfully arrested?
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example: A judge ordered the City of New York to pay Robert Bell $20,000. Bell was unlawfully arrested after giving the finger to three NYPD officers.',
			'NodeDataStore' => 'Arrests:ArstAllegWrongfulArrest',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 384,
			'NodeTree' => '1',
			'NodeParentID' => '557',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that their arrest was wrongful?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 385,
			'NodeTree' => '1',
			'NodeParentID' => '515',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were any charges filed against [SetCivLabel]?',
			'NodeDataStore' => 'Arrests:ArstChargesFiled',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 386,
			'NodeTree' => '1',
			'NodeParentID' => '385',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What charges were filed against [SetCivLabel]?',
			'NodePromptNotes' => 'These terms vary, so please choose the charges that look the most similar.',
			'NodeResponseSet' => 'Definition::Arrest Charges',
			'NodeDataStore' => 'Charges:ChrgCharges',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 387,
			'NodeTree' => '1',
			'NodeParentID' => '385',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Were there other charges not on this list?',
			'NodeDataStore' => 'Arrests:ArstChargesOther',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 388,
			'NodeTree' => '1',
			'NodeParentID' => '385',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were <i>all</i> the charges dropped before [SetCivLabel] was released?',
			'NodeDataStore' => 'Arrests:ArstNoChargesFiled',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 389,
			'NodeTree' => '1',
			'NodeParentID' => '516',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you think the charges filed against [SetCivLabel] were retaliatory?
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example: A man accidentally shoves an officer while protesting the arrest of his wife. After violently arresting the man, he is charged with "disturbing the peace," "resisting arrest," and "assaulting an officer".',
			'NodeDataStore' => 'Arrests:ArstAllegRetaliatoryCharges',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 390,
			'NodeTree' => '1',
			'NodeParentID' => '558',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that these charges were retaliatory?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeCharLimit' => '300',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 392,
			'NodeTree' => '1',
			'NodeParentID' => '523',
			'NodeParentOrder' => '2',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What citation charges were filed against [LoopItemLabel]?',
			'NodeInternalNotes' => 'Vehicle Stop',
			'NodeResponseSet' => 'Definition::Citation Charges',
			'NodeDataStore' => 'Charges:ChrgCharges',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 393,
			'NodeTree' => '1',
			'NodeParentID' => '523',
			'NodeParentOrder' => '3',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What citation charges were filed against [LoopItemLabel]?',
			'NodeResponseSet' => 'Definition::Citation Charges Pedestrian',
			'NodeDataStore' => 'Charges:ChrgCharges',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 394,
			'NodeTree' => '1',
			'NodeParentID' => '523',
			'NodeParentOrder' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'Were there other charges not on this list?',
			'NodeDataStore' => 'Stops:StopChargesOther',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 397,
			'NodeTree' => '1',
			'NodeParentID' => '524',
			'NodeType' => 'Radio',
			'NodePromptText' => '<div class="nPromptHeader">[LoopItemLabel]\'s Citation Charges:</div>
<div class="pL10 pB10 slBlueDark"><b><i>[[ListCitationCharges]]</i></b></div>
Do you think the charges filed against [LoopItemLabel] were retaliatory?
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example: A man accidentally shoves an officer while protesting the arrest of his wife. After violently arresting the man, he is charged with "disturbing the peace," "resisting arrest," and "assaulting an officer".',
			'NodeDataStore' => 'Stops:StopAllegRetaliatoryCharges',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 398,
			'NodeTree' => '1',
			'NodeParentID' => '559',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that these charges were retaliatory?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 400,
			'NodeTree' => '1',
			'NodeParentID' => '153',
			'NodeType' => 'Loop Root',
			'NodePromptText' => 'Now let\'s reveal important details of the citiations given.',
			'NodePromptNotes' => 'all-citations',
			'NodeDataBranch' => 'Citations',
			'NodeDataStore' => 'Stops:StopID',
			'NodeOpts' => '23'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 401,
			'NodeTree' => '1',
			'NodeParentID' => '552',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that this was wrongful?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 402,
			'NodeTree' => '1',
			'NodeParentID' => '405',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was any of [SetCivLabel]\'s property seized? (This does not include illegal items.)',
			'NodeDataStore' => 'Searches:SrchSeized',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 403,
			'NodeTree' => '1',
			'NodeParentID' => '402',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'What type(s) of property was seized?',
			'NodeResponseSet' => 'Definition::Property Seized Types',
			'NodeDataStore' => 'SearchSeize:SrchSeizType',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 404,
			'NodeTree' => '1',
			'NodeParentID' => '402',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the specific items seized. For example, if cash seized, please specify the dollar amount.',
			'NodeDataStore' => 'Searches:SrchSeizedDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 405,
			'NodeTree' => '1',
			'NodeParentID' => '505',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="nPromptHeader">Search of [SetCivLabel]:</div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 406,
			'NodeTree' => '1',
			'NodeParentID' => '405',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was any of [SetCivLabel]\'s property damaged?',
			'NodeDataStore' => 'Searches:SrchDamage',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 407,
			'NodeTree' => '1',
			'NodeParentID' => '406',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the specific items damaged and the nature of the damage. Please include dollar amounts for repairing or replacing damaged items.',
			'NodeDataStore' => 'Searches:SrchDamageDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 408,
			'NodeTree' => '1',
			'NodeParentID' => '506',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you think this property was wrongfully seized or damaged? (This does not include illegal items.)
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example: A complainant alleged that an officer searched his car without consent after he was pulled over for an unsafe lane change.',
			'NodeDataStore' => 'Searches:SrchAllegWrongfulProperty',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 409,
			'NodeTree' => '1',
			'NodeParentID' => '554',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'What makes you think that this property seizure or damage was wrongful?',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 410,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeParentOrder' => '5',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Injuries',
			'NodePromptNotes' => 'great-job'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 411,
			'NodeTree' => '1',
			'NodeParentID' => '517',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Injuries</div>
Did the force used against anyone result in injuries?',
			'NodePromptNotes' => '[[VictimsWithForce]]'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 412,
			'NodeTree' => '1',
			'NodeParentID' => '523',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="nPromptHeader mBn20">Citations against [LoopItemLabel]:</div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 413,
			'NodeTree' => '1',
			'NodeParentID' => '359',
			'NodeParentOrder' => '1',
			'NodeType' => 'Uploads',
			'NodePromptText' => 'Please upload any injury photos available.',
			'NodeDataStore' => 'Injuries:InjID',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 414,
			'NodeTree' => '1',
			'NodeParentID' => '410',
			'NodeParentOrder' => '3',
			'NodeType' => 'Loop Root',
			'NodePromptText' => 'Important medical care details.',
			'NodePromptNotes' => 'all-medical-care',
			'NodeDataBranch' => 'Medical Care',
			'NodeDataStore' => 'InjuryCare:InjCareEmergencyOnScene',
			'NodeOpts' => '23'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 415,
			'NodeTree' => '1',
			'NodeParentID' => '519',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => '<div class="nPromptHeader">Medical Care</div>
Did anyone with injuries receive medical care?',
			'NodePromptNotes' => '[[VictimsWithInjuries]]'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 416,
			'NodeTree' => '1',
			'NodeParentID' => '463',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h1>Who\'s Involved: Police Officers</h1>
<p>Next, you\'ll share info about the <b class="slBlueDark">police departments and officers</b> linked to the incident. This will help us get your complaint to the right place!</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 419,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '7',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'File & Publish Complaint',
			'NodePromptNotes' => 'great-job'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 420,
			'NodeTree' => '1',
			'NodeParentID' => '419',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Review Narrative',
			'NodePromptNotes' => 'review-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 422,
			'NodeTree' => '1',
			'NodeParentID' => '451',
			'NodeParentOrder' => '1',
			'NodeType' => 'Spambot Honey Pot',
			'NodePromptText' => 'You are brave, aren\'t you?',
			'NodeDataStore' => 'Complaints:ComHoneyPot',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 423,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '9',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At the time, did this victim live in this police department\'s jurisdiction?',
			'NodeDataStore' => 'Civilians:CivResident',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 424,
			'NodeTree' => '1',
			'NodeParentID' => '523',
			'NodeParentOrder' => '1',
			'NodeType' => 'Text',
			'NodePromptText' => 'What is the citation number?',
			'NodeDataStore' => 'Stops:StopCitationNumber',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 425,
			'NodeTree' => '1',
			'NodeParentID' => '510',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were any officers injured during this use of force incident?',
			'NodeDataStore' => 'Force:ForOfficerInjured',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 426,
			'NodeTree' => '1',
			'NodeParentID' => '425',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe these officer injuries.',
			'NodeDataStore' => 'Force:ForOfficerInjuredDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 427,
			'NodeTree' => '1',
			'NodeParentID' => '475',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think an officer neglected their duty by <span class="slBlueDark">failing to take appropriate action</span>?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Neglect of Duty: A woman is groped on the street by an unknown man. When the police arrive, they refuse to file an official report or investigate.',
			'NodeDataStore' => 'AllegSilver:AlleSilNeglectDuty',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 428,
			'NodeTree' => '1',
			'NodeParentID' => '545',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 429,
			'NodeTree' => '1',
			'NodeParentID' => '545',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 430,
			'NodeTree' => '1',
			'NodeParentID' => '545',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that an officer neglected their duty?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 431,
			'NodeTree' => '1',
			'NodeParentID' => '419',
			'NodeParentOrder' => '2',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Sharing Options',
			'NodePromptNotes' => 'sharing-options'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 432,
			'NodeTree' => '1',
			'NodeParentID' => '527',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Sharing Options</h2>',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 433,
			'NodeTree' => '1',
			'NodeParentID' => '436',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe what else you\'ve done.',
			'NodeDataStore' => 'Complaints:ComTriedOtherWaysDesc',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 434,
			'NodeTree' => '1',
			'NodeParentID' => '527',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'In some locations we have local civil rights lawyers who we trust. Would you like us to share your complaint and contact information with them?',
			'NodeDataStore' => 'Complaints:ComLegalAidHelp',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 435,
			'NodeTree' => '1',
			'NodeParentID' => '527',
			'NodeParentOrder' => '2',
			'NodeType' => 'Text',
			'NodePromptText' => 'How did you hear about us?',
			'NodeDataStore' => 'Complaints:ComHowHear',
			'NodeTextSuggest' => 'How Did You Hear',
			'NodeOpts' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 436,
			'NodeTree' => '1',
			'NodeParentID' => '527',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did you try to submit your complaint some other way before using Open Police Complaints?',
			'NodeDataStore' => 'Complaints:ComTriedOtherWays',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 437,
			'NodeTree' => '1',
			'NodeParentID' => '2',
			'NodeParentOrder' => '1',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Privacy Options',
			'NodePromptNotes' => 'attorney'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 438,
			'NodeTree' => '1',
			'NodeParentID' => '457',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="m0">The Scene</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 439,
			'NodeTree' => '1',
			'NodeParentID' => '563',
			'NodeType' => 'Other/Custom',
			'NodePromptText' => 'You should probably stop now and consult with a criminal attorney to ask for legal advice before submitting this complaint.
This is important because information provided in this complaint could hurt a criminal defense. Let\'s avoid this risk of publicly publishing your complaint on the internet.

Perhaps you should copy the narrative you wrote and paste it into an email that you send to yourself. Then you can come back with it later when all charges have been resolved, or after checking with all lawyers involved.

Or you could still use Open Police Complaints right now in a couple ways...
You could keep going to create a high-quality complaint right now while memories are freshest, then just print it out for your attorney or legal aid service. After you logout, we will delete your complaint from our database except for some anonymous multiple-choice answers. Only that anonymous information will be published publicly.

This anonymous data will greatly help with efforts to improve police accountability, both in your neighborhood and nationwide.',
			'NodeResponseSet' => 'Definition::Unresolved Charges Actions',
			'NodeDataStore' => 'Complaints:ComUnresolvedChargesActions',
			'NodeOpts' => '15'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 442,
			'NodeTree' => '1',
			'NodeParentID' => '452',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="slBlueDark mTn20 mBn20">Some very important questions before we begin...</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 443,
			'NodeTree' => '1',
			'NodeParentID' => '452',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you have a lawyer in regard to this event?',
			'NodeDataStore' => 'Complaints:ComAttorneyHas',
			'NodeOpts' => '255'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 444,
			'NodeTree' => '1',
			'NodeParentID' => '443',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you want help finding a lawyer?',
			'NodeDataStore' => 'Complaints:ComAttorneyWant',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 445,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeParentOrder' => '3',
			'NodeType' => 'Drop Down',
			'NodePromptText' => 'Age Range',
			'NodeResponseSet' => 'Definition::Age Ranges',
			'NodeDataStore' => 'PhysicalDesc:PhysAge',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 446,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div id="fixedHeader"><h2>Victim #[LoopItemCnt]:</h2></div>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 447,
			'NodeTree' => '1',
			'NodeParentID' => '606',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Do you know the name of this witness?',
			'NodeDataStore' => 'Civilians:CivGiveName',
			'NodeOpts' => '51'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 450,
			'NodeTree' => '1',
			'NodeParentID' => '205',
			'NodeType' => 'Data Manip: New',
			'NodePromptText' => 'Create Wrongful Stop Allegation Record',
			'NodeResponseSet' => '117',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 451,
			'NodeTree' => '1',
			'NodeParentID' => '157',
			'NodeType' => 'Page',
			'NodePromptText' => 'Start',
			'NodePromptNotes' => 'share-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 452,
			'NodeTree' => '1',
			'NodeParentID' => '437',
			'NodeType' => 'Page',
			'NodePromptText' => 'Attorney',
			'NodePromptNotes' => 'attorney'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 453,
			'NodeTree' => '1',
			'NodeParentID' => '437',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Transparency/Privacy Options',
			'NodePromptNotes' => 'privacy-options'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 454,
			'NodeTree' => '1',
			'NodeParentID' => '437',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Login',
			'NodePromptNotes' => 'login'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 455,
			'NodeTree' => '1',
			'NodeParentID' => '158',
			'NodeType' => 'Page',
			'NodePromptText' => 'When',
			'NodePromptNotes' => 'when',
			'NodeDataBranch' => 'Incidents'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 456,
			'NodeTree' => '1',
			'NodeParentID' => '159',
			'NodeType' => 'Page',
			'NodePromptText' => 'Where',
			'NodePromptNotes' => 'where',
			'NodeDataBranch' => 'Incidents'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 457,
			'NodeTree' => '1',
			'NodeParentID' => '159',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'The Scene',
			'NodePromptNotes' => 'the-scene',
			'NodeDataBranch' => 'Scenes'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 458,
			'NodeTree' => '1',
			'NodeParentID' => '139',
			'NodeType' => 'Loop Root',
			'NodePromptText' => 'Your Info',
			'NodePromptNotes' => 'your-info',
			'NodeDataBranch' => 'Complainants'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 459,
			'NodeTree' => '1',
			'NodeParentID' => '458',
			'NodeType' => 'Page',
			'NodePromptText' => 'Your Role',
			'NodePromptNotes' => 'your-role'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 460,
			'NodeTree' => '1',
			'NodeParentID' => '458',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'About You',
			'NodePromptNotes' => 'about-you',
			'NodeDataBranch' => 'PhysicalDesc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 461,
			'NodeTree' => '1',
			'NodeParentID' => '55',
			'NodeType' => 'Page',
			'NodePromptText' => 'Adding Victim',
			'NodePromptNotes' => 'adding-victim',
			'NodeDataBranch' => 'PhysicalDesc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 462,
			'NodeTree' => '1',
			'NodeParentID' => '97',
			'NodeType' => 'Page',
			'NodePromptText' => 'Adding Witness',
			'NodePromptNotes' => 'adding-witness',
			'NodeDataBranch' => 'PhysicalDesc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 463,
			'NodeTree' => '1',
			'NodeParentID' => '144',
			'NodeType' => 'Page',
			'NodePromptText' => 'Next: Police Officers',
			'NodePromptNotes' => 'next-police-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 464,
			'NodeTree' => '1',
			'NodeParentID' => '143',
			'NodeType' => 'Page',
			'NodePromptText' => 'Find A Police Department',
			'NodePromptNotes' => 'find-a-police-department'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 465,
			'NodeTree' => '1',
			'NodeParentID' => '160',
			'NodeType' => 'Page',
			'NodePromptText' => 'Adding Police Officer',
			'NodePromptNotes' => 'adding-police-officer',
			'NodeDataBranch' => 'PhysicalDesc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 466,
			'NodeTree' => '1',
			'NodeParentID' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Next: What Happened',
			'NodePromptNotes' => 'next-what-happened'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 467,
			'NodeTree' => '1',
			'NodeParentID' => '198',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Stop',
			'NodePromptNotes' => 'allegation-stop'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 468,
			'NodeTree' => '1',
			'NodeParentID' => '198',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop Allegation: Officer ID',
			'NodePromptNotes' => 'allegation-stop-officer-id'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 469,
			'NodeTree' => '1',
			'NodeParentID' => '199',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Search',
			'NodePromptNotes' => 'allegation-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 470,
			'NodeTree' => '1',
			'NodeParentID' => '199',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Property Damage/Seizure',
			'NodePromptNotes' => 'allegation-property-damage'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 471,
			'NodeTree' => '1',
			'NodeParentID' => '200',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Unreasonable Use of Force',
			'NodePromptNotes' => 'allegation-use-of-force'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 472,
			'NodeTree' => '1',
			'NodeParentID' => '201',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Arrest',
			'NodePromptNotes' => 'allegation-arrest'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 473,
			'NodeTree' => '1',
			'NodeParentID' => '202',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Excessive Citation',
			'NodePromptNotes' => 'allegation-citation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 474,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Policy or Procedure',
			'NodePromptNotes' => 'allegation-procedure'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 475,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Neglect of Duty',
			'NodePromptNotes' => 'allegation-neglect-of-duty'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 476,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Intimidation Using Weapon',
			'NodePromptNotes' => 'allegation-intimidation-using-weapon'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 477,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Sexual Assault',
			'NodePromptNotes' => 'allegation-sexual-assault'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 478,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Bias-Based Policing',
			'NodePromptNotes' => 'allegation-bias-based-policing'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 479,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Retaliation',
			'NodePromptNotes' => 'allegation-retaliation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 480,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Conduct Unbecoming of an Officer',
			'NodePromptNotes' => 'allegation-conduct-unbecoming'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 481,
			'NodeTree' => '1',
			'NodeParentID' => '154',
			'NodeParentOrder' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Discourtesy',
			'NodePromptNotes' => 'allegation-discourteous'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 482,
			'NodeTree' => '1',
			'NodeParentID' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'GO GOLD!',
			'NodePromptNotes' => 'go-gold'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 483,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeType' => 'Page',
			'NodePromptText' => 'Next: What Happened, Gold Version',
			'NodePromptNotes' => 'next-what-happened-gold'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 484,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'What Happened (Gold)',
			'NodePromptNotes' => 'did-these-things-happen-gold'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 485,
			'NodeTree' => '1',
			'NodeParentID' => '196',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Order of Events',
			'NodePromptNotes' => 'order-of-events'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 486,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Same As Another',
			'NodePromptNotes' => 'was-stop-the-same-as-another'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 487,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Which Officers',
			'NodePromptNotes' => 'stop-which-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 488,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Reason Given',
			'NodePromptNotes' => 'reason-for-stop'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 489,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Asked for ID',
			'NodePromptNotes' => 'stop-asked-for-id'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 490,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Entered Private Home/Property',
			'NodePromptNotes' => 'stop-entered-private-home-or-workplace'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 491,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Orders Given',
			'NodePromptNotes' => 'stop-orders'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 492,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Stop: Frisked, Handcuffed',
			'NodePromptNotes' => 'stop-frisk-or-handcuff'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 493,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '8',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Stop (Gold)',
			'NodePromptNotes' => 'wrongful-stop-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 494,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Same As Another',
			'NodePromptNotes' => 'was-search-the-same-as-another'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 495,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Which Officers',
			'NodePromptNotes' => 'search-which-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 496,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: Same As Another',
			'NodePromptNotes' => 'was-force-the-same-as-another'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 497,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Same As Another',
			'NodePromptNotes' => 'was-arrest-the-same-as-another'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 498,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: Which Officers',
			'NodePromptNotes' => 'force-which-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 499,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Which Officers',
			'NodePromptNotes' => 'arrest-which-officers'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 500,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Reason Given, Content',
			'NodePromptNotes' => 'search-reason-and-consent'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 501,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Orders Given',
			'NodePromptNotes' => 'search-orders'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 502,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Dog Sniff, Strip Search',
			'NodePromptNotes' => 'search-sniffed-or-stripped'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 503,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Search (Gold)',
			'NodePromptNotes' => 'wrongful-search-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 504,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Discovered Contraband',
			'NodePromptNotes' => 'search-discovered-contraband'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 505,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Search: Property Damage/Seizure',
			'NodePromptNotes' => 'search-property-seized-or-damaged'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 506,
			'NodeTree' => '1',
			'NodeParentID' => '150',
			'NodeParentOrder' => '8',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Property Damage/Seizure (Gold)',
			'NodePromptNotes' => 'wrongful-seized-or-damaged-property-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 507,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: Orders Given',
			'NodePromptNotes' => 'force-orders'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 508,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: What Type',
			'NodePromptNotes' => 'more-detailed-type-of-force'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 509,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: Other Info',
			'NodePromptNotes' => 'force-info'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 510,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'Force: Officer Injuries',
			'NodePromptNotes' => 'force-was-an-officer-injured'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 511,
			'NodeTree' => '1',
			'NodeParentID' => '151',
			'NodeParentOrder' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Unreasonable Use of Force (Gold)',
			'NodePromptNotes' => 'unreasonable-force-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 512,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Reason Given, Miranda Rights',
			'NodePromptNotes' => 'arrest-reason-and-miranda'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 513,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '3',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Orders Given',
			'NodePromptNotes' => 'arrest-orders'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 514,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '5',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Wrongful Arrest (Gold)',
			'NodePromptNotes' => 'wrongful-arrest-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 515,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '6',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Charges',
			'NodePromptNotes' => 'arrest-charges'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 516,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Retaliatory Arrest Charges (Gold)',
			'NodePromptNotes' => 'arrest-charges-retaliatory'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 517,
			'NodeTree' => '1',
			'NodeParentID' => '410',
			'NodeType' => 'Page',
			'NodePromptText' => 'Injuries',
			'NodePromptNotes' => 'was-anyone-injured'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 518,
			'NodeTree' => '1',
			'NodeParentID' => '357',
			'NodeType' => 'Page',
			'NodePromptText' => 'Injury Details',
			'NodePromptNotes' => 'injury-details'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 519,
			'NodeTree' => '1',
			'NodeParentID' => '410',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Medical Care',
			'NodePromptNotes' => 'did-anyone-get-medical-care'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 520,
			'NodeTree' => '1',
			'NodeParentID' => '414',
			'NodeType' => 'Page',
			'NodePromptText' => 'Medical Care: Doctor',
			'NodePromptNotes' => 'medical-care-doctor-info'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 521,
			'NodeTree' => '1',
			'NodeParentID' => '414',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Medical Care: Emergency Staff',
			'NodePromptNotes' => 'medical-care-emergency-staff'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 522,
			'NodeTree' => '1',
			'NodeParentID' => '414',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Medical Care: Upload Evidence',
			'NodePromptNotes' => 'medical-care-uploads'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 523,
			'NodeTree' => '1',
			'NodeParentID' => '400',
			'NodeType' => 'Page',
			'NodePromptText' => 'Citation Details',
			'NodePromptNotes' => 'citation-details'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 524,
			'NodeTree' => '1',
			'NodeParentID' => '400',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Allegation: Retaliatory Citations (Gold)',
			'NodePromptNotes' => 'retaliatory-citation-allegation'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 526,
			'NodeTree' => '1',
			'NodeParentID' => '420',
			'NodeType' => 'Page',
			'NodePromptText' => 'Review Your Story',
			'NodePromptNotes' => 'review-your-story'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 527,
			'NodeTree' => '1',
			'NodeParentID' => '431',
			'NodeType' => 'Page',
			'NodePromptText' => 'Sharing Options',
			'NodePromptNotes' => 'sharing-options'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 528,
			'NodeTree' => '1',
			'NodeParentID' => '156',
			'NodeType' => 'Page',
			'NodePromptText' => 'Last Step! Confirm Your Complaint',
			'NodePromptNotes' => 'confirm-complaint'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 529,
			'NodeTree' => '1',
			'NodeParentID' => '156',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Complaint Finished!',
			'NodePromptNotes' => 'complaint-finished'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 530,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Manip: New',
			'NodeDefault' => 'Y',
			'NodeDataBranch' => 'Civilians',
			'NodeDataStore' => 'Civilians:CivIsCreator'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 537,
			'NodeTree' => '1',
			'NodeParentID' => '210',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '130',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 538,
			'NodeTree' => '1',
			'NodeParentID' => '213',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '119',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 539,
			'NodeTree' => '1',
			'NodeParentID' => '218',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '120',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 540,
			'NodeTree' => '1',
			'NodeParentID' => '223',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '115',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 541,
			'NodeTree' => '1',
			'NodeParentID' => '228',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '116',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 542,
			'NodeTree' => '1',
			'NodeParentID' => '232',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '131',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 543,
			'NodeTree' => '1',
			'NodeParentID' => '235',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '124',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 544,
			'NodeTree' => '1',
			'NodeParentID' => '240',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '127',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 545,
			'NodeTree' => '1',
			'NodeParentID' => '427',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '132',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 546,
			'NodeTree' => '1',
			'NodeParentID' => '243',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '125',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 547,
			'NodeTree' => '1',
			'NodeParentID' => '248',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '126',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 548,
			'NodeTree' => '1',
			'NodeParentID' => '252',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '121',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 549,
			'NodeTree' => '1',
			'NodeParentID' => '256',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '122',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 550,
			'NodeTree' => '1',
			'NodeParentID' => '260',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '128',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 551,
			'NodeTree' => '1',
			'NodeParentID' => '261',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '129',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 552,
			'NodeTree' => '1',
			'NodeParentID' => '318',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '117',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 553,
			'NodeTree' => '1',
			'NodeParentID' => '333',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '119',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 554,
			'NodeTree' => '1',
			'NodeParentID' => '408',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '120',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 555,
			'NodeTree' => '1',
			'NodeParentID' => '353',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '115',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 556,
			'NodeTree' => '1',
			'NodeParentID' => '381',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '131',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 557,
			'NodeTree' => '1',
			'NodeParentID' => '383',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '116',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 558,
			'NodeTree' => '1',
			'NodeParentID' => '389',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '123',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 559,
			'NodeTree' => '1',
			'NodeParentID' => '397',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '124',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 560,
			'NodeTree' => '1',
			'NodeParentID' => '306',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '130',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 561,
			'NodeTree' => '1',
			'NodeParentID' => '311',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '118',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 563,
			'NodeTree' => '1',
			'NodeParentID' => '268',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have ALL of these charges been resolved? (Resolved means that the charges have been dropped or the people charged have been found \'guilty\' or \'not guilty\' in court.)',
			'NodeDataStore' => 'Complaints:ComAllChargesResolved',
			'NodeOpts' => '85'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 564,
			'NodeTree' => '1',
			'NodeParentID' => '3',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '304',
			'NodeDataBranch' => 'Complaints',
			'NodeDataStore' => 'Complaints:ComPrivacy'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 565,
			'NodeTree' => '1',
			'NodeParentID' => '458',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptText' => 'Your Name',
			'NodePromptNotes' => 'your-name',
			'NodeDataBranch' => 'PersonContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 566,
			'NodeTree' => '1',
			'NodeParentID' => '458',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptText' => 'Your Contact Information',
			'NodePromptNotes' => 'your-contact-info',
			'NodeDataBranch' => 'PersonContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 567,
			'NodeTree' => '1',
			'NodeParentID' => '458',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Your Other Important Details',
			'NodePromptNotes' => 'your-other-important-details'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 568,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="m0">About you:</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 569,
			'NodeTree' => '1',
			'NodeParentID' => '48',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'LinksCivilianVehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 570,
			'NodeTree' => '1',
			'NodeParentID' => '569',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Were you the driver or a passenger?',
			'NodeDataStore' => 'LinksCivilianVehicles:LnkCivVehicRole',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 571,
			'NodeTree' => '1',
			'NodeParentID' => '586',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you already described this vehicle?',
			'NodeDataStore' => 'Civilians:CivInPreviousVehicle',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 572,
			'NodeTree' => '1',
			'NodeParentID' => '571',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Which vehicle was it?',
			'NodeDataStore' => 'LinksCivilianVehicles:LnkCivVehicVehicID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 573,
			'NodeTree' => '1',
			'NodeParentID' => '569',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Vehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 574,
			'NodeTree' => '1',
			'NodeParentID' => '90',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'LinksCivilianVehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 575,
			'NodeTree' => '1',
			'NodeParentID' => '574',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was this victim the driver or a passenger?',
			'NodeDataStore' => 'LinksCivilianVehicles:LnkCivVehicRole',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 576,
			'NodeTree' => '1',
			'NodeParentID' => '574',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you already described this vehicle?',
			'NodeDataStore' => 'Civilians:CivInPreviousVehicle',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 577,
			'NodeTree' => '1',
			'NodeParentID' => '576',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Which vehicle was it?',
			'NodeDataStore' => 'LinksCivilianVehicles:LnkCivVehicVehicID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 578,
			'NodeTree' => '1',
			'NodeParentID' => '576',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Vehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 579,
			'NodeTree' => '1',
			'NodeParentID' => '148',
			'NodeParentOrder' => '4',
			'NodeType' => 'Data Manip: Update',
			'NodeDefault' => 'Y',
			'NodeDataStore' => 'EventSequence:EveUserFinished'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 580,
			'NodeTree' => '1',
			'NodeParentID' => '564',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: Update',
			'NodeResponseSet' => '194',
			'NodeDataStore' => 'Complaints:ComStatus'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 581,
			'NodeTree' => '1',
			'NodeParentID' => '564',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: Update',
			'NodeResponseSet' => '295',
			'NodeDataStore' => 'Complaints:ComType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 582,
			'NodeTree' => '1',
			'NodeParentID' => '564',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Manip: Update',
			'NodeDefault' => 'Silver',
			'NodeDataStore' => 'Complaints:ComAwardMedallion'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 583,
			'NodeTree' => '1',
			'NodeParentID' => '571',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Vehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 584,
			'NodeTree' => '1',
			'NodeParentID' => '588',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Have you already described this vehicle?',
			'NodeDataStore' => 'Officers:OffInPreviousVehicle',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 585,
			'NodeTree' => '1',
			'NodeParentID' => '584',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Which vehicle was it?',
			'NodeDataStore' => 'LinksOfficerVehicles:LnkOffVehicVehicID'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 586,
			'NodeTree' => '1',
			'NodeParentID' => '130',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'LinksCivilianVehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 587,
			'NodeTree' => '1',
			'NodeParentID' => '586',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was this witness the driver or a passenger?',
			'NodeDataStore' => 'LinksCivilianVehicles:LnkCivVehicRole',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 588,
			'NodeTree' => '1',
			'NodeParentID' => '188',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'LinksOfficerVehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 589,
			'NodeTree' => '1',
			'NodeParentID' => '584',
			'NodeParentOrder' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Vehicles'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 591,
			'NodeTree' => '1',
			'NodeParentID' => '610',
			'NodeType' => 'Radio',
			'NodePromptText' => '<h2>Do you think the arrest charges filed against anyone were retaliatory?</h2>
<div class="allegation">This Is An Allegation.</div>',
			'NodePromptNotes' => 'Example of Retaliatory Charges: A man accidentally shoves an officer while protesting the arrest of his wife. After violently arresting the man, he is charged with "disturbing the peace," "resisting arrest," and "assaulting an officer."',
			'NodeDataStore' => 'AllegSilver:AlleSilArrestRetaliatory',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 592,
			'NodeTree' => '1',
			'NodeParentID' => '591',
			'NodeType' => 'Data Manip: New',
			'NodeResponseSet' => '123',
			'NodeDataBranch' => 'Allegations',
			'NodeDataStore' => 'Allegations:AlleType'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 593,
			'NodeTree' => '1',
			'NodeParentID' => '592',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Officer(s)?',
			'NodeResponseSet' => 'LoopItems::Officers',
			'NodeDataStore' => 'LinksOfficerAllegations:LnkOffAlleOffID',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 594,
			'NodeTree' => '1',
			'NodeParentID' => '592',
			'NodeParentOrder' => '1',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Which Victim(s)?',
			'NodeResponseSet' => 'LoopItems::Victims',
			'NodeDataStore' => 'LinksCivilianAllegations:LnkCivAlleCivID',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 595,
			'NodeTree' => '1',
			'NodeParentID' => '592',
			'NodeParentOrder' => '2',
			'NodeType' => 'Long Text',
			'NodePromptText' => '<h2><span class="slBlueDark">What</span> makes you think that these charges were retaliatory?</h2>',
			'NodeDataStore' => 'Allegations:AlleDescription',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 596,
			'NodeTree' => '1',
			'NodeParentID' => '527',
			'NodeParentOrder' => '4',
			'NodeType' => 'Long Text',
			'NodePromptText' => 'Do you have any suggestions or feedback for us? For example, please let us know if we missed anything.'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 597,
			'NodeTree' => '1',
			'NodeParentID' => '419',
			'NodeType' => 'Page',
			'NodePromptText' => 'Great Job!',
			'NodePromptNotes' => 'great-job'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 598,
			'NodeTree' => '1',
			'NodeParentID' => '597',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<div class="nPromptHeader">Congratulations! You\'ve done all the hard work.</div>

Next, you can edit the original story you wrote. Be sure to include these allegations in your story:

[list of allegations]'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 599,
			'NodeTree' => '1',
			'NodeParentID' => '152',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptText' => 'Arrest: Strip Search',
			'NodePromptNotes' => 'arrest-strip-search'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 600,
			'NodeTree' => '1',
			'NodeParentID' => '599',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was [SetCivLabel] strip searched at the police station?',
			'NodeDataStore' => 'Arrests:ArstStrip',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 601,
			'NodeTree' => '1',
			'NodeParentID' => '600',
			'NodeType' => 'Text',
			'NodePromptText' => 'We understand that this isn\'t easy, but please provide as much detail as you can about the strip search.',
			'NodeDataStore' => 'Arrests:ArstStripSearchDesc'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 604,
			'NodeTree' => '1',
			'NodeParentID' => '460',
			'NodeParentOrder' => '2',
			'NodeType' => 'Data Manip: Wrap',
			'NodeDataBranch' => 'PersonContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 605,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeParentOrder' => '5',
			'NodeType' => 'Data Manip: Wrap',
			'NodeDataBranch' => 'PersonContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 606,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeParentOrder' => '5',
			'NodeType' => 'Data Manip: Wrap',
			'NodeDataBranch' => 'PersonContact'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 607,
			'NodeTree' => '1',
			'NodeParentID' => '457',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did this incident begin with a vehicle stop? This includes cars, trucks, motorcycles, bicycles, and boats.',
			'NodeDataStore' => 'Scenes:ScnIsVehicle',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 608,
			'NodeTree' => '1',
			'NodeParentID' => '159',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'the-scene-uploads',
			'NodeDataBranch' => 'Scenes'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 609,
			'NodeTree' => '1',
			'NodeParentID' => '608',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2 class="m0">The Scene</h2>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 610,
			'NodeTree' => '1',
			'NodeParentID' => '472',
			'NodeParentOrder' => '1',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'allegation-arrest-charges'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 611,
			'NodeTree' => '1',
			'NodeParentID' => '472',
			'NodeParentOrder' => '2',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'allegation-arrest-miranda'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 612,
			'NodeTree' => '1',
			'NodeParentID' => '509',
			'NodeType' => 'Radio',
			'NodePromptText' => 'At any point, was [SetCivLabel] chased by the police?',
			'NodeDataStore' => 'Force:ForChase',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 613,
			'NodeTree' => '1',
			'NodeParentID' => '612',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What kind of chase was it?',
			'NodeResponseSet' => 'Definition::Chase Types',
			'NodeDataStore' => 'Force:ForChaseType',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 614,
			'NodeTree' => '1',
			'NodeParentID' => '465',
			'NodeParentOrder' => '4',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was this officer wearing a uniform?',
			'NodeDataStore' => 'Officers:OffUniform',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 615,
			'NodeTree' => '1',
			'NodeParentID' => '589',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Was the vehicle unmarked or undercover? This means it looks like a normal vehicle with no badges, graphics, or visible police lights.',
			'NodeDataStore' => 'Vehicles:VehicUnmarked',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 616,
			'NodeTree' => '1',
			'NodeParentID' => '510',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] have a weapon?',
			'NodeDataStore' => 'Force:ForVictimHadWeapon',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 617,
			'NodeTree' => '1',
			'NodeParentID' => '616',
			'NodeType' => 'Radio',
			'NodePromptText' => 'What type of weapon?',
			'NodeResponseSet' => 'Definition::Civilian Weapons',
			'NodeDataStore' => 'Force:ForVictimWhatWeapon',
			'NodeTextSuggest' => 'Intimidation Weapons',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 618,
			'NodeTree' => '1',
			'NodeParentID' => '616',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did [SetCivLabel] use the weapon at all?',
			'NodeResponseSet' => 'Definition::Intimidating Displays Of Weapon',
			'NodeDataStore' => 'Force:ForVictimUseWeapon'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 620,
			'NodeTree' => '1',
			'NodeParentID' => '510',
			'NodeType' => 'Checkbox',
			'NodePromptText' => 'Select any types of force [SetCivLabel] used against an officer:',
			'NodeResponseSet' => 'Definition::Force Type - Body Weapons',
			'NodeDataStore' => 'ForceCivBody:ForceCivBodyWeapon',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 621,
			'NodeTree' => '1',
			'NodeParentID' => '149',
			'NodeParentOrder' => '4',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'stop-sobriety-test'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 622,
			'NodeTree' => '1',
			'NodeParentID' => '621',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer give [SetCivLabel] an <span class="slBlueDark">alcohol</span> breath test?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 623,
			'NodeTree' => '1',
			'NodeParentID' => '621',
			'NodeParentOrder' => '1',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer give [SetCivLabel] a <span class="slBlueDark">marijuana</span> breath test?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 624,
			'NodeTree' => '1',
			'NodeParentID' => '621',
			'NodeParentOrder' => '2',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer collect [SetCivLabel]\'s saliva?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 625,
			'NodeTree' => '1',
			'NodeParentID' => '622',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did the officer say [SetCivLabel] failed this test?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 626,
			'NodeTree' => '1',
			'NodeParentID' => '623',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did the officer say [SetCivLabel] failed this test?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 627,
			'NodeTree' => '1',
			'NodeParentID' => '621',
			'NodeParentOrder' => '3',
			'NodeType' => 'Radio',
			'NodePromptText' => 'Did an officer give [SetCivLabel] any other sobriety tests?',
			'NodeOpts' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 628,
			'NodeTree' => '1',
			'NodeParentID' => '627',
			'NodeType' => 'Text',
			'NodePromptText' => 'Describe the other sobriety tests:'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 629,
			'NodeTree' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'Complaints',
			'NodePromptNotes' => '12',
			'NodeOpts' => '77'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 631,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeType' => 'XML',
			'NodePromptText' => 'Incidents',
			'NodePromptNotes' => '14',
			'NodeOpts' => '385'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 632,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '1',
			'NodeType' => 'XML',
			'NodePromptText' => 'Scenes',
			'NodePromptNotes' => '15',
			'NodeOpts' => '385'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 633,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'AllegSilver',
			'NodePromptNotes' => '56',
			'NodeOpts' => '385'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 634,
			'NodeTree' => '2',
			'NodeParentID' => '657',
			'NodeType' => 'XML',
			'NodePromptText' => 'LinksComplaintDept',
			'NodePromptNotes' => '44',
			'NodeOpts' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 635,
			'NodeTree' => '2',
			'NodeParentID' => '634',
			'NodeType' => 'XML',
			'NodePromptText' => 'Departments',
			'NodePromptNotes' => '11'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 636,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '5',
			'NodeType' => 'XML',
			'NodePromptText' => 'Officers',
			'NodePromptNotes' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 637,
			'NodeTree' => '2',
			'NodeParentID' => '636',
			'NodeType' => 'XML',
			'NodePromptText' => 'PersonContact',
			'NodePromptNotes' => '54'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 638,
			'NodeTree' => '2',
			'NodeParentID' => '636',
			'NodeParentOrder' => '1',
			'NodeType' => 'XML',
			'NodePromptText' => 'PhysicalDesc',
			'NodePromptNotes' => '53'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 639,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '6',
			'NodeType' => 'XML',
			'NodePromptText' => 'Civilians',
			'NodePromptNotes' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 640,
			'NodeTree' => '2',
			'NodeParentID' => '639',
			'NodeType' => 'XML',
			'NodePromptText' => 'PersonContact',
			'NodePromptNotes' => '54'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 641,
			'NodeTree' => '2',
			'NodeParentID' => '639',
			'NodeParentOrder' => '1',
			'NodeType' => 'XML',
			'NodePromptText' => 'PhysicalDesc',
			'NodePromptNotes' => '53'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 642,
			'NodeTree' => '2',
			'NodeParentID' => '636',
			'NodeParentOrder' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'LinksOfficerVehicles',
			'NodePromptNotes' => '55',
			'NodeOpts' => '55'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 643,
			'NodeTree' => '2',
			'NodeParentID' => '639',
			'NodeParentOrder' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'LinksCivilianVehicles',
			'NodePromptNotes' => '63',
			'NodeOpts' => '55'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 644,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '7',
			'NodeType' => 'XML',
			'NodePromptText' => 'Vehicles',
			'NodePromptNotes' => '52'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 645,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '3',
			'NodeType' => 'XML',
			'NodePromptText' => 'Allegations',
			'NodePromptNotes' => '13'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 646,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '8',
			'NodeType' => 'XML',
			'NodePromptText' => 'EventSequence',
			'NodePromptNotes' => '37'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 647,
			'NodeTree' => '2',
			'NodeParentID' => '646',
			'NodeType' => 'XML',
			'NodePromptText' => 'Stops',
			'NodePromptNotes' => '21'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 648,
			'NodeTree' => '2',
			'NodeParentID' => '646',
			'NodeParentOrder' => '1',
			'NodeType' => 'XML',
			'NodePromptText' => 'Searches',
			'NodePromptNotes' => '22'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 649,
			'NodeTree' => '2',
			'NodeParentID' => '646',
			'NodeParentOrder' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'Force',
			'NodePromptNotes' => '16'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 650,
			'NodeTree' => '2',
			'NodeParentID' => '646',
			'NodeParentOrder' => '3',
			'NodeType' => 'XML',
			'NodePromptText' => 'Arrests',
			'NodePromptNotes' => '23'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 651,
			'NodeTree' => '2',
			'NodeParentID' => '646',
			'NodeParentOrder' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'Orders',
			'NodePromptNotes' => '20'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 652,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '9',
			'NodeType' => 'XML',
			'NodePromptText' => 'Evidence',
			'NodePromptNotes' => '19'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 655,
			'NodeTree' => '2',
			'NodeParentID' => '639',
			'NodeParentOrder' => '3',
			'NodeType' => 'XML',
			'NodePromptText' => 'Injuries',
			'NodePromptNotes' => '17'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 656,
			'NodeTree' => '2',
			'NodeParentID' => '639',
			'NodeParentOrder' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'InjuryCare',
			'NodePromptNotes' => '46'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 657,
			'NodeTree' => '2',
			'NodeParentID' => '629',
			'NodeParentOrder' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'LinkedDepartments',
			'NodePromptNotes' => '0'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 665,
			'NodeTree' => '1',
			'NodeParentID' => '461',
			'NodeType' => 'Data Manip: Update',
			'NodeDefault' => 'N',
			'NodeDataStore' => 'Civilians:CivIsCreator'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 666,
			'NodeTree' => '1',
			'NodeParentID' => '462',
			'NodeType' => 'Data Manip: Update',
			'NodeDefault' => 'N',
			'NodeDataStore' => 'Civilians:CivIsCreator'
		]);
		
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 1,
			'NodeResNode' => '146',
			'NodeResEng' => '<span class="f22"><b>Yes, I want to Go Gold!</b></span>',
			'NodeResValue' => 'Gold'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 2,
			'NodeResNode' => '146',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No thanks, I want to submit my complaint as it is.',
			'NodeResValue' => 'Silver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 4,
			'NodeResNode' => '28',
			'NodeResEng' => '<b class="slBlueDark mR5">I was a victim.</b> I experienced police misconduct.<div class="p5"></div>',
			'NodeResValue' => 'Victim'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 5,
			'NodeResNode' => '28',
			'NodeResOrd' => '1',
			'NodeResEng' => '<b class="slBlueDark mR5">I was a witness.</b> I was on the scene and saw police misconduct against someone else.<div class="p5"></div>',
			'NodeResValue' => 'Witness'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 6,
			'NodeResNode' => '28',
			'NodeResOrd' => '2',
			'NodeResEng' => 'I am helping a victim or a witness submit this complaint.<div class="p5"></div>',
			'NodeResValue' => 'Helper'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 8,
			'NodeResNode' => '42',
			'NodeResEng' => 'Male',
			'NodeResValue' => 'M'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 9,
			'NodeResNode' => '42',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Female',
			'NodeResValue' => 'F'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 10,
			'NodeResNode' => '47',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 11,
			'NodeResNode' => '47',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 12,
			'NodeResNode' => '47',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 13,
			'NodeResNode' => '48',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 14,
			'NodeResNode' => '48',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 15,
			'NodeResNode' => '48',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 16,
			'NodeResNode' => '56',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 17,
			'NodeResNode' => '56',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 18,
			'NodeResNode' => '56',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 20,
			'NodeResNode' => '70',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 21,
			'NodeResNode' => '70',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 22,
			'NodeResNode' => '70',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 23,
			'NodeResNode' => '73',
			'NodeResEng' => 'Male',
			'NodeResValue' => 'M'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 24,
			'NodeResNode' => '73',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Female',
			'NodeResValue' => 'F'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 25,
			'NodeResNode' => '73',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 26,
			'NodeResNode' => '76',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 27,
			'NodeResNode' => '76',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 28,
			'NodeResNode' => '76',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 29,
			'NodeResNode' => '447',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 30,
			'NodeResNode' => '447',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 31,
			'NodeResNode' => '447',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 32,
			'NodeResNode' => '89',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 33,
			'NodeResNode' => '89',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 34,
			'NodeResNode' => '89',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 35,
			'NodeResNode' => '90',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 36,
			'NodeResNode' => '90',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 37,
			'NodeResNode' => '90',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 38,
			'NodeResNode' => '102',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 39,
			'NodeResNode' => '102',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 40,
			'NodeResNode' => '102',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 42,
			'NodeResNode' => '117',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 43,
			'NodeResNode' => '117',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 44,
			'NodeResNode' => '117',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 45,
			'NodeResNode' => '129',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 46,
			'NodeResNode' => '129',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 47,
			'NodeResNode' => '129',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 48,
			'NodeResNode' => '130',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 49,
			'NodeResNode' => '130',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 50,
			'NodeResNode' => '130',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 51,
			'NodeResNode' => '138',
			'NodeResEng' => '<b>Yes</b>, I am providing the information needed to formally submit this complaint to the relevant police oversight agency so they can properly investigate.  (Your complaint, including names, will be visible on the OPC website, but personal information w',
			'NodeResValue' => '304'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 52,
			'NodeResNode' => '138',
			'NodeResOrd' => '1',
			'NodeResEng' => '<b>Yes</b>, I am providing all of the above information, BUT do not want any names or personal information to appear on the OPC website.  (This includes both civilian and police officer names. <a href="#">Click here for an OPC website sample.</a>)<div cla',
			'NodeResValue' => '305'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 53,
			'NodeResNode' => '138',
			'NodeResOrd' => '2',
			'NodeResEng' => '<b>No</b>, I need my complaint to be completely anonymous.  (This will make it harder to investigate and prove your complaint. Neither OPC staff, nor investigators will be able to contact you. Any details which could be used for personal identification wi',
			'NodeResValue' => '306'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 55,
			'NodeResNode' => '163',
			'NodeResEng' => 'This officer <b class="slBlueDark">engaged in misconduct</b>',
			'NodeResValue' => 'Subject Officer'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 56,
			'NodeResNode' => '163',
			'NodeResOrd' => '1',
			'NodeResEng' => 'This officer <b class="slBlueDark">witnessed misconduct</b> but is not the subject of this complaint',
			'NodeResValue' => 'Witness Officer'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 57,
			'NodeResNode' => '164',
			'NodeResEng' => 'On-Duty',
			'NodeResValue' => 'On-Duty'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 58,
			'NodeResNode' => '164',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Off-Duty',
			'NodeResValue' => 'Off-Duty'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 59,
			'NodeResNode' => '164',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 60,
			'NodeResNode' => '165',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 61,
			'NodeResNode' => '165',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 62,
			'NodeResNode' => '165',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 63,
			'NodeResNode' => '176',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 64,
			'NodeResNode' => '176',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 65,
			'NodeResNode' => '176',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 66,
			'NodeResNode' => '448',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 67,
			'NodeResNode' => '448',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 68,
			'NodeResNode' => '448',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 69,
			'NodeResNode' => '187',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 70,
			'NodeResNode' => '187',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 71,
			'NodeResNode' => '187',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 72,
			'NodeResNode' => '188',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 73,
			'NodeResNode' => '188',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 74,
			'NodeResNode' => '188',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 75,
			'NodeResNode' => '204',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 76,
			'NodeResNode' => '204',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 77,
			'NodeResNode' => '204',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 78,
			'NodeResNode' => '205',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 79,
			'NodeResNode' => '205',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 80,
			'NodeResNode' => '205',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 83,
			'NodeResNode' => '209',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 84,
			'NodeResNode' => '209',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 85,
			'NodeResNode' => '209',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 86,
			'NodeResNode' => '210',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 87,
			'NodeResNode' => '210',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 88,
			'NodeResNode' => '210',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 90,
			'NodeResNode' => '212',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 91,
			'NodeResNode' => '212',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 92,
			'NodeResNode' => '212',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 93,
			'NodeResNode' => '213',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 94,
			'NodeResNode' => '213',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 95,
			'NodeResNode' => '213',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 98,
			'NodeResNode' => '217',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 99,
			'NodeResNode' => '217',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 100,
			'NodeResNode' => '217',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 101,
			'NodeResNode' => '218',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 102,
			'NodeResNode' => '218',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 103,
			'NodeResNode' => '218',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 106,
			'NodeResNode' => '222',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 107,
			'NodeResNode' => '222',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 108,
			'NodeResNode' => '222',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 109,
			'NodeResNode' => '223',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 110,
			'NodeResNode' => '223',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 111,
			'NodeResNode' => '223',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 114,
			'NodeResNode' => '227',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 115,
			'NodeResNode' => '227',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 116,
			'NodeResNode' => '227',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 117,
			'NodeResNode' => '228',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 118,
			'NodeResNode' => '228',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 119,
			'NodeResNode' => '228',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 122,
			'NodeResNode' => '232',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 123,
			'NodeResNode' => '232',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 124,
			'NodeResNode' => '232',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 126,
			'NodeResNode' => '234',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 127,
			'NodeResNode' => '234',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 128,
			'NodeResNode' => '234',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 129,
			'NodeResNode' => '235',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 130,
			'NodeResNode' => '235',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 131,
			'NodeResNode' => '235',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 134,
			'NodeResNode' => '240',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 135,
			'NodeResNode' => '240',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 136,
			'NodeResNode' => '240',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 140,
			'NodeResNode' => '248',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 141,
			'NodeResNode' => '248',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 142,
			'NodeResNode' => '248',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 145,
			'NodeResNode' => '252',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 146,
			'NodeResNode' => '252',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 147,
			'NodeResNode' => '252',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 150,
			'NodeResNode' => '256',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 151,
			'NodeResNode' => '256',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 152,
			'NodeResNode' => '256',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 155,
			'NodeResNode' => '260',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 156,
			'NodeResNode' => '260',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 157,
			'NodeResNode' => '260',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 158,
			'NodeResNode' => '261',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 159,
			'NodeResNode' => '261',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 160,
			'NodeResNode' => '261',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 163,
			'NodeResNode' => '268',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 164,
			'NodeResNode' => '268',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 165,
			'NodeResNode' => '268',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 166,
			'NodeResNode' => '269',
			'NodeResEng' => '<span class="nPromptHeader">Yes</span>',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 167,
			'NodeResNode' => '269',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 174,
			'NodeResNode' => '276',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 175,
			'NodeResNode' => '276',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 176,
			'NodeResNode' => '277',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 177,
			'NodeResNode' => '277',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 178,
			'NodeResNode' => '278',
			'NodeResEng' => 'Workplace',
			'NodeResValue' => '350'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 179,
			'NodeResNode' => '278',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Airport',
			'NodeResValue' => '351'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 180,
			'NodeResNode' => '278',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Indoor Public Space',
			'NodeResValue' => '353'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 181,
			'NodeResNode' => '281',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 182,
			'NodeResNode' => '281',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 183,
			'NodeResNode' => '281',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 188,
			'NodeResNode' => '301',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 189,
			'NodeResNode' => '301',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 190,
			'NodeResNode' => '301',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 191,
			'NodeResNode' => '303',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 192,
			'NodeResNode' => '303',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 193,
			'NodeResNode' => '303',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 194,
			'NodeResNode' => '304',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 195,
			'NodeResNode' => '304',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 196,
			'NodeResNode' => '304',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 197,
			'NodeResNode' => '305',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 198,
			'NodeResNode' => '305',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 199,
			'NodeResNode' => '305',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 200,
			'NodeResNode' => '306',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 201,
			'NodeResNode' => '306',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 202,
			'NodeResNode' => '306',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 203,
			'NodeResNode' => '307',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 204,
			'NodeResNode' => '307',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 205,
			'NodeResNode' => '307',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 206,
			'NodeResNode' => '308',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 207,
			'NodeResNode' => '308',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 208,
			'NodeResNode' => '308',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 209,
			'NodeResNode' => '310',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 210,
			'NodeResNode' => '310',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 211,
			'NodeResNode' => '310',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 212,
			'NodeResNode' => '311',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 213,
			'NodeResNode' => '311',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 214,
			'NodeResNode' => '311',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 215,
			'NodeResNode' => '314',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 216,
			'NodeResNode' => '314',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 217,
			'NodeResNode' => '314',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 218,
			'NodeResNode' => '315',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 219,
			'NodeResNode' => '315',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 220,
			'NodeResNode' => '315',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 221,
			'NodeResNode' => '316',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 222,
			'NodeResNode' => '316',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 223,
			'NodeResNode' => '316',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 224,
			'NodeResNode' => '318',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 225,
			'NodeResNode' => '318',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 226,
			'NodeResNode' => '318',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 227,
			'NodeResNode' => '319',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 228,
			'NodeResNode' => '319',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 229,
			'NodeResNode' => '319',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 230,
			'NodeResNode' => '322',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 231,
			'NodeResNode' => '322',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 232,
			'NodeResNode' => '322',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 233,
			'NodeResNode' => '325',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 234,
			'NodeResNode' => '325',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 235,
			'NodeResNode' => '325',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 236,
			'NodeResNode' => '328',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 237,
			'NodeResNode' => '328',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 238,
			'NodeResNode' => '328',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 239,
			'NodeResNode' => '330',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 240,
			'NodeResNode' => '330',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 241,
			'NodeResNode' => '330',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 242,
			'NodeResNode' => '333',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 243,
			'NodeResNode' => '333',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 244,
			'NodeResNode' => '333',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 245,
			'NodeResNode' => '335',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 246,
			'NodeResNode' => '335',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 247,
			'NodeResNode' => '336',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 248,
			'NodeResNode' => '336',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 249,
			'NodeResNode' => '336',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 250,
			'NodeResNode' => '338',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 251,
			'NodeResNode' => '338',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 252,
			'NodeResNode' => '338',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 253,
			'NodeResNode' => '351',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 254,
			'NodeResNode' => '351',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 255,
			'NodeResNode' => '351',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 256,
			'NodeResNode' => '352',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 257,
			'NodeResNode' => '352',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 258,
			'NodeResNode' => '352',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 259,
			'NodeResNode' => '353',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 260,
			'NodeResNode' => '353',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 261,
			'NodeResNode' => '353',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 262,
			'NodeResNode' => '362',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 263,
			'NodeResNode' => '362',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 264,
			'NodeResNode' => '362',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 265,
			'NodeResNode' => '370',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 266,
			'NodeResNode' => '370',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 267,
			'NodeResNode' => '370',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 268,
			'NodeResNode' => '379',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 269,
			'NodeResNode' => '379',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 270,
			'NodeResNode' => '379',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 271,
			'NodeResNode' => '381',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 274,
			'NodeResNode' => '383',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 275,
			'NodeResNode' => '383',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 276,
			'NodeResNode' => '383',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 277,
			'NodeResNode' => '385',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 278,
			'NodeResNode' => '385',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 279,
			'NodeResNode' => '385',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 280,
			'NodeResNode' => '388',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 281,
			'NodeResNode' => '388',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 282,
			'NodeResNode' => '388',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 283,
			'NodeResNode' => '389',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 284,
			'NodeResNode' => '389',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 285,
			'NodeResNode' => '389',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 286,
			'NodeResNode' => '397',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 287,
			'NodeResNode' => '397',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 288,
			'NodeResNode' => '397',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 289,
			'NodeResNode' => '402',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 290,
			'NodeResNode' => '402',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 291,
			'NodeResNode' => '402',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 292,
			'NodeResNode' => '406',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 293,
			'NodeResNode' => '406',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 294,
			'NodeResNode' => '406',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 295,
			'NodeResNode' => '408',
			'NodeResEng' => '<span class="allegation">Yes</span>',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 296,
			'NodeResNode' => '408',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 297,
			'NodeResNode' => '408',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 298,
			'NodeResNode' => '427',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 299,
			'NodeResNode' => '427',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 300,
			'NodeResNode' => '427',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 301,
			'NodeResNode' => '423',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 302,
			'NodeResNode' => '423',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 303,
			'NodeResNode' => '423',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 304,
			'NodeResNode' => '425',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 305,
			'NodeResNode' => '425',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 306,
			'NodeResNode' => '425',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 309,
			'NodeResNode' => '434',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 310,
			'NodeResNode' => '434',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 311,
			'NodeResNode' => '434',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 312,
			'NodeResNode' => '436',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 313,
			'NodeResNode' => '436',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 314,
			'NodeResNode' => '436',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 315,
			'NodeResNode' => '443',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 316,
			'NodeResNode' => '443',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 317,
			'NodeResNode' => '443',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 318,
			'NodeResNode' => '444',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 319,
			'NodeResNode' => '444',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 320,
			'NodeResNode' => '444',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 321,
			'NodeResNode' => '450',
			'NodeResEng' => '17',
			'NodeResValue' => '117'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 322,
			'NodeResNode' => '43',
			'NodeResEng' => 'Asian American',
			'NodeResValue' => '318'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 323,
			'NodeResNode' => '43',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Black or African American',
			'NodeResValue' => '319'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 324,
			'NodeResNode' => '43',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Hispanic or Latino',
			'NodeResValue' => '320'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 325,
			'NodeResNode' => '43',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Native American',
			'NodeResValue' => '321'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 326,
			'NodeResNode' => '43',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Pacific Islander',
			'NodeResValue' => '322'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 327,
			'NodeResNode' => '43',
			'NodeResOrd' => '5',
			'NodeResEng' => 'White',
			'NodeResValue' => '323'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 328,
			'NodeResNode' => '43',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Other',
			'NodeResValue' => '324'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 329,
			'NodeResNode' => '43',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Decline or Unknown',
			'NodeResValue' => '325'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 330,
			'NodeResNode' => '49',
			'NodeResEng' => 'Car',
			'NodeResValue' => '355'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 331,
			'NodeResNode' => '49',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Bicycle',
			'NodeResValue' => '356'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 332,
			'NodeResNode' => '49',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Boat',
			'NodeResValue' => '357'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 333,
			'NodeResNode' => '49',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Motorcycle',
			'NodeResValue' => '358'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 334,
			'NodeResNode' => '67',
			'NodeResEng' => '0-15',
			'NodeResValue' => '101'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 335,
			'NodeResNode' => '67',
			'NodeResOrd' => '1',
			'NodeResEng' => '16-24',
			'NodeResValue' => '102'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 336,
			'NodeResNode' => '67',
			'NodeResOrd' => '2',
			'NodeResEng' => '25-34',
			'NodeResValue' => '103'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 337,
			'NodeResNode' => '67',
			'NodeResOrd' => '3',
			'NodeResEng' => '35-44',
			'NodeResValue' => '104'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 338,
			'NodeResNode' => '67',
			'NodeResOrd' => '4',
			'NodeResEng' => '45-54',
			'NodeResValue' => '105'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 339,
			'NodeResNode' => '67',
			'NodeResOrd' => '5',
			'NodeResEng' => '55-64',
			'NodeResValue' => '106'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 340,
			'NodeResNode' => '67',
			'NodeResOrd' => '6',
			'NodeResEng' => '65-74',
			'NodeResValue' => '107'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 341,
			'NodeResNode' => '67',
			'NodeResOrd' => '7',
			'NodeResEng' => '75-84',
			'NodeResValue' => '108'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 342,
			'NodeResNode' => '67',
			'NodeResOrd' => '8',
			'NodeResEng' => '85+',
			'NodeResValue' => '109'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 343,
			'NodeResNode' => '74',
			'NodeResEng' => 'Asian American',
			'NodeResValue' => '318'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 344,
			'NodeResNode' => '74',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Black or African American',
			'NodeResValue' => '319'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 345,
			'NodeResNode' => '74',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Hispanic or Latino',
			'NodeResValue' => '320'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 346,
			'NodeResNode' => '74',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Native American',
			'NodeResValue' => '321'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 347,
			'NodeResNode' => '74',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Pacific Islander',
			'NodeResValue' => '322'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 348,
			'NodeResNode' => '74',
			'NodeResOrd' => '5',
			'NodeResEng' => 'White',
			'NodeResValue' => '323'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 349,
			'NodeResNode' => '74',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Other',
			'NodeResValue' => '324'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 350,
			'NodeResNode' => '74',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Decline or Unknown',
			'NodeResValue' => '325'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 351,
			'NodeResNode' => '79',
			'NodeResEng' => 'Slim/Slender',
			'NodeResValue' => '170'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 352,
			'NodeResNode' => '79',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Medium/Average',
			'NodeResValue' => '171'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 353,
			'NodeResNode' => '79',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Athletic/Muscular',
			'NodeResValue' => '172'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 354,
			'NodeResNode' => '79',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Large/Fat',
			'NodeResValue' => '173'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 355,
			'NodeResNode' => '91',
			'NodeResEng' => 'Car',
			'NodeResValue' => '355'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 356,
			'NodeResNode' => '91',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Bicycle',
			'NodeResValue' => '356'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 357,
			'NodeResNode' => '91',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Boat',
			'NodeResValue' => '357'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 358,
			'NodeResNode' => '91',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Motorcycle',
			'NodeResValue' => '358'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 359,
			'NodeResNode' => '112',
			'NodeResEng' => '0-15',
			'NodeResValue' => '101'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 360,
			'NodeResNode' => '112',
			'NodeResOrd' => '1',
			'NodeResEng' => '16-24',
			'NodeResValue' => '102'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 361,
			'NodeResNode' => '112',
			'NodeResOrd' => '2',
			'NodeResEng' => '25-34',
			'NodeResValue' => '103'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 362,
			'NodeResNode' => '112',
			'NodeResOrd' => '3',
			'NodeResEng' => '35-44',
			'NodeResValue' => '104'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 363,
			'NodeResNode' => '112',
			'NodeResOrd' => '4',
			'NodeResEng' => '45-54',
			'NodeResValue' => '105'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 364,
			'NodeResNode' => '112',
			'NodeResOrd' => '5',
			'NodeResEng' => '55-64',
			'NodeResValue' => '106'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 365,
			'NodeResNode' => '112',
			'NodeResOrd' => '6',
			'NodeResEng' => '65-74',
			'NodeResValue' => '107'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 366,
			'NodeResNode' => '112',
			'NodeResOrd' => '7',
			'NodeResEng' => '75-84',
			'NodeResValue' => '108'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 367,
			'NodeResNode' => '112',
			'NodeResOrd' => '8',
			'NodeResEng' => '85+',
			'NodeResValue' => '109'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 368,
			'NodeResNode' => '114',
			'NodeResEng' => 'Asian American',
			'NodeResValue' => '318'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 369,
			'NodeResNode' => '114',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Black or African American',
			'NodeResValue' => '319'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 370,
			'NodeResNode' => '114',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Hispanic or Latino',
			'NodeResValue' => '320'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 371,
			'NodeResNode' => '114',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Native American',
			'NodeResValue' => '321'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 372,
			'NodeResNode' => '114',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Pacific Islander',
			'NodeResValue' => '322'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 373,
			'NodeResNode' => '114',
			'NodeResOrd' => '5',
			'NodeResEng' => 'White',
			'NodeResValue' => '323'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 374,
			'NodeResNode' => '114',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Other',
			'NodeResValue' => '324'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 375,
			'NodeResNode' => '114',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Decline or Unknown',
			'NodeResValue' => '325'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 376,
			'NodeResNode' => '119',
			'NodeResEng' => 'Slim/Slender',
			'NodeResValue' => '170'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 377,
			'NodeResNode' => '119',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Medium/Average',
			'NodeResValue' => '171'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 378,
			'NodeResNode' => '119',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Athletic/Muscular',
			'NodeResValue' => '172'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 379,
			'NodeResNode' => '119',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Large/Fat',
			'NodeResValue' => '173'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 380,
			'NodeResNode' => '131',
			'NodeResEng' => 'Car',
			'NodeResValue' => '255'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 381,
			'NodeResNode' => '131',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Bicycle',
			'NodeResValue' => '356'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 382,
			'NodeResNode' => '131',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Boat',
			'NodeResValue' => '357'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 383,
			'NodeResNode' => '131',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Motorcycle',
			'NodeResValue' => '358'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 393,
			'NodeResNode' => '174',
			'NodeResEng' => 'Asian American',
			'NodeResValue' => '318'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 394,
			'NodeResNode' => '174',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Black or African American',
			'NodeResValue' => '319'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 395,
			'NodeResNode' => '174',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Hispanic or Latino',
			'NodeResValue' => '320'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 396,
			'NodeResNode' => '174',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Native American',
			'NodeResValue' => '321'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 397,
			'NodeResNode' => '174',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Pacific Islander',
			'NodeResValue' => '322'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 398,
			'NodeResNode' => '174',
			'NodeResOrd' => '5',
			'NodeResEng' => 'White',
			'NodeResValue' => '323'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 399,
			'NodeResNode' => '174',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Other',
			'NodeResValue' => '324'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 400,
			'NodeResNode' => '174',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Decline or Unknown',
			'NodeResValue' => '325'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 401,
			'NodeResNode' => '178',
			'NodeResEng' => 'Slim/Slender',
			'NodeResValue' => '170'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 402,
			'NodeResNode' => '178',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Medium/Average',
			'NodeResValue' => '171'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 403,
			'NodeResNode' => '178',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Athletic/Muscular',
			'NodeResValue' => '172'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 404,
			'NodeResNode' => '178',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Large/Fat',
			'NodeResValue' => '173'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 405,
			'NodeResNode' => '189',
			'NodeResEng' => 'Car',
			'NodeResValue' => '360'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 406,
			'NodeResNode' => '189',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Van',
			'NodeResValue' => '361'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 407,
			'NodeResNode' => '189',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Motorcycle',
			'NodeResValue' => '362'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 408,
			'NodeResNode' => '189',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Bicycle',
			'NodeResValue' => '363'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 409,
			'NodeResNode' => '189',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Boat',
			'NodeResValue' => '364'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 410,
			'NodeResNode' => '189',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Other',
			'NodeResValue' => '365'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 417,
			'NodeResNode' => '246',
			'NodeResEng' => 'Baton',
			'NodeResValue' => '282'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 418,
			'NodeResNode' => '246',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Taser',
			'NodeResValue' => '283'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 419,
			'NodeResNode' => '246',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Gun',
			'NodeResValue' => '284'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 420,
			'NodeResNode' => '246',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Mace or Pepper Spray',
			'NodeResValue' => '285'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 421,
			'NodeResNode' => '246',
			'NodeResOrd' => '4',
			'NodeResEng' => 'K9 (Dog)',
			'NodeResValue' => '286'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 422,
			'NodeResNode' => '246',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Other',
			'NodeResValue' => '287'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 445,
			'NodeResNode' => '339',
			'NodeResEng' => 'Marijuana',
			'NodeResValue' => '213'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 446,
			'NodeResNode' => '339',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Other Illegal Drugs (i.e. cocaine, MDMA, etc.)',
			'NodeResValue' => '214'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 447,
			'NodeResNode' => '339',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Illegal Gun',
			'NodeResValue' => '215'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 448,
			'NodeResNode' => '339',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Illegal Knife',
			'NodeResValue' => '216'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 449,
			'NodeResNode' => '339',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Stolen Goods',
			'NodeResValue' => '217'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 450,
			'NodeResNode' => '339',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Other',
			'NodeResValue' => '218'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 451,
			'NodeResNode' => '344',
			'NodeResEng' => 'Hands/Arms',
			'NodeResValue' => '243'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 452,
			'NodeResNode' => '344',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Body Weight',
			'NodeResValue' => '244'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 453,
			'NodeResNode' => '344',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Knees',
			'NodeResValue' => '245'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 454,
			'NodeResNode' => '344',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Feet/Legs',
			'NodeResValue' => '246'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 455,
			'NodeResNode' => '345',
			'NodeResEng' => 'Fist (Closed Hand)',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 456,
			'NodeResNode' => '345',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Slap (Open Hand)',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 457,
			'NodeResNode' => '345',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Kick (Feet)',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 458,
			'NodeResNode' => '345',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Knee',
			'NodeResValue' => '240'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 459,
			'NodeResNode' => '345',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Elbow',
			'NodeResValue' => '241'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 460,
			'NodeResNode' => '345',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Head',
			'NodeResValue' => '242'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 461,
			'NodeResNode' => '346',
			'NodeResEng' => 'Hands',
			'NodeResValue' => '247'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 462,
			'NodeResNode' => '346',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Tackle',
			'NodeResValue' => '248'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 463,
			'NodeResNode' => '346',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Leg Sweep',
			'NodeResValue' => '249'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 464,
			'NodeResNode' => '348',
			'NodeResEng' => 'Lethal Ammo',
			'NodeResValue' => '250'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 465,
			'NodeResNode' => '348',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Less-Lethal Ammo (e.g. rubber bullets, bean bag rounds)',
			'NodeResValue' => '251'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 492,
			'NodeResNode' => '403',
			'NodeResEng' => 'Cash',
			'NodeResValue' => '308'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 493,
			'NodeResNode' => '403',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Phone',
			'NodeResValue' => '309'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 494,
			'NodeResNode' => '403',
			'NodeResOrd' => '2',
			'NodeResEng' => 'TV',
			'NodeResValue' => '310'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 495,
			'NodeResNode' => '403',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Vehicle',
			'NodeResValue' => '311'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 496,
			'NodeResNode' => '403',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Real Estate',
			'NodeResValue' => '312'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 497,
			'NodeResNode' => '403',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Bank Account',
			'NodeResValue' => '313'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 498,
			'NodeResNode' => '403',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Boat',
			'NodeResValue' => '314'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 499,
			'NodeResNode' => '403',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Firearms',
			'NodeResValue' => '315'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 500,
			'NodeResNode' => '403',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Identity Documents',
			'NodeResValue' => '316'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 501,
			'NodeResNode' => '403',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Other Items',
			'NodeResValue' => '317'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 502,
			'NodeResNode' => '439',
			'NodeResEng' => 'Full complaint to print or save',
			'NodeResValue' => '398'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 503,
			'NodeResNode' => '439',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Anonymous complaint data only',
			'NodeResValue' => '399'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 504,
			'NodeResNode' => '439',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Logout',
			'NodeResValue' => '400'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 505,
			'NodeResNode' => '445',
			'NodeResEng' => '0-15',
			'NodeResValue' => '101'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 506,
			'NodeResNode' => '445',
			'NodeResOrd' => '1',
			'NodeResEng' => '16-24',
			'NodeResValue' => '102'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 507,
			'NodeResNode' => '445',
			'NodeResOrd' => '2',
			'NodeResEng' => '25-34',
			'NodeResValue' => '103'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 508,
			'NodeResNode' => '445',
			'NodeResOrd' => '3',
			'NodeResEng' => '35-44',
			'NodeResValue' => '104'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 509,
			'NodeResNode' => '445',
			'NodeResOrd' => '4',
			'NodeResEng' => '45-54',
			'NodeResValue' => '105'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 510,
			'NodeResNode' => '445',
			'NodeResOrd' => '5',
			'NodeResEng' => '55-64',
			'NodeResValue' => '106'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 511,
			'NodeResNode' => '445',
			'NodeResOrd' => '6',
			'NodeResEng' => '65-74',
			'NodeResValue' => '107'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 512,
			'NodeResNode' => '445',
			'NodeResOrd' => '7',
			'NodeResEng' => '75-84',
			'NodeResValue' => '108'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 513,
			'NodeResNode' => '445',
			'NodeResOrd' => '8',
			'NodeResEng' => '85+',
			'NodeResValue' => '109'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 514,
			'NodeResNode' => '381',
			'NodeResOrd' => '1',
			'NodeResEng' => '<span class="allegation">No</span>',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 517,
			'NodeResNode' => '381',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 518,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 519,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 520,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 521,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 522,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 523,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 524,
			'NodeResNode' => '563',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 525,
			'NodeResNode' => '563',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 526,
			'NodeResNode' => '563',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 527,
			'NodeResNode' => '562',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 528,
			'NodeResNode' => '562',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 529,
			'NodeResNode' => '562',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 530,
			'NodeResNode' => '0',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 531,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 532,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 533,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 534,
			'NodeResNode' => '571',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 535,
			'NodeResNode' => '571',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 536,
			'NodeResNode' => '0',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 537,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 538,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 539,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 540,
			'NodeResNode' => '570',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 541,
			'NodeResNode' => '570',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 542,
			'NodeResNode' => '575',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 543,
			'NodeResNode' => '575',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 544,
			'NodeResNode' => '576',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 545,
			'NodeResNode' => '576',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 546,
			'NodeResNode' => '299',
			'NodeResEng' => 'Walking Violation',
			'NodeResValue' => '326',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 547,
			'NodeResNode' => '299',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Disturbing the Peace',
			'NodeResValue' => '327',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 548,
			'NodeResNode' => '299',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Public Intoxication',
			'NodeResValue' => '328',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 549,
			'NodeResNode' => '299',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Illegal Drug Violation',
			'NodeResValue' => '329',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 550,
			'NodeResNode' => '299',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Suspected of Something Else',
			'NodeResValue' => '330',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 551,
			'NodeResNode' => '299',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Matched a Description of Someone',
			'NodeResValue' => '331',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 552,
			'NodeResNode' => '299',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Investigating Someone Else',
			'NodeResValue' => '332',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 553,
			'NodeResNode' => '299',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Providing Assistance/Responding to Call',
			'NodeResValue' => '333',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 554,
			'NodeResNode' => '299',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Other Reason',
			'NodeResValue' => '334',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 555,
			'NodeResNode' => '299',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Officer Did Not Give Reason For Stop',
			'NodeResValue' => '335'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 556,
			'NodeResNode' => '297',
			'NodeResEng' => 'Speeding',
			'NodeResValue' => '336',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 557,
			'NodeResNode' => '297',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Vehicle Defect',
			'NodeResValue' => '337',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 558,
			'NodeResNode' => '297',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Expired Registration',
			'NodeResValue' => '338',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 559,
			'NodeResNode' => '297',
			'NodeResOrd' => '3',
			'NodeResEng' => 'License Plate Violation',
			'NodeResValue' => '339',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 560,
			'NodeResNode' => '297',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Illegal Turn or Lane Change',
			'NodeResValue' => '340',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 561,
			'NodeResNode' => '297',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Seatbelt or Cell Phone Violation',
			'NodeResValue' => '341',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 562,
			'NodeResNode' => '297',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Stop Sign/Light Violation',
			'NodeResValue' => '342',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 563,
			'NodeResNode' => '297',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Driving While Impaired',
			'NodeResValue' => '343',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 564,
			'NodeResNode' => '297',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Sobriety Checkpoint',
			'NodeResValue' => '344',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 565,
			'NodeResNode' => '297',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Border Checkpoint',
			'NodeResValue' => '345',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 566,
			'NodeResNode' => '297',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Other Reason',
			'NodeResValue' => '346',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 567,
			'NodeResNode' => '297',
			'NodeResOrd' => '11',
			'NodeResEng' => 'Officer Did Not Give Reason For Stop',
			'NodeResValue' => '347'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 568,
			'NodeResNode' => '335',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 569,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 570,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 571,
			'NodeResNode' => '584',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 572,
			'NodeResNode' => '584',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 573,
			'NodeResNode' => '0',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 574,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 575,
			'NodeResNode' => '587',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 576,
			'NodeResNode' => '587',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 577,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 578,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 579,
			'NodeResNode' => '590',
			'NodeResEng' => 'Driver',
			'NodeResValue' => 'Driver'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 580,
			'NodeResNode' => '590',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Passenger',
			'NodeResValue' => 'Passenger'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 581,
			'NodeResNode' => '172',
			'NodeResEng' => 'Female',
			'NodeResValue' => 'F'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 582,
			'NodeResNode' => '172',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Male',
			'NodeResValue' => 'M'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 583,
			'NodeResNode' => '172',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not Sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 584,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 585,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 586,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 587,
			'NodeResNode' => '591',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 588,
			'NodeResNode' => '591',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 589,
			'NodeResNode' => '591',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 590,
			'NodeResNode' => '243',
			'NodeResEng' => 'No or does not apply',
			'NodeResValue' => '276'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 591,
			'NodeResNode' => '243',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '281'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 592,
			'NodeResNode' => '243',
			'NodeResOrd' => '2',
			'NodeResEng' => '<span class="allegation">Displayed Weapon</span>',
			'NodeResValue' => '277',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 593,
			'NodeResNode' => '243',
			'NodeResOrd' => '3',
			'NodeResEng' => '<span class="allegation">Drew Weapon</span>',
			'NodeResValue' => '278',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 594,
			'NodeResNode' => '243',
			'NodeResOrd' => '4',
			'NodeResEng' => '<span class="allegation">Pointed Weapon</span>',
			'NodeResValue' => '279',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 595,
			'NodeResNode' => '243',
			'NodeResOrd' => '5',
			'NodeResEng' => '<span class="allegation">Weapon Fired/Discharged</span>',
			'NodeResValue' => '280',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 596,
			'NodeResNode' => '28',
			'NodeResOrd' => '3',
			'NodeResEng' => 'I am upset about police brutality on the news or on the internet, but I was not on the scene.',
			'NodeResValue' => 'Upset'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 597,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 598,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 599,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 630,
			'NodeResNode' => '600',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 631,
			'NodeResNode' => '600',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 632,
			'NodeResNode' => '600',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 637,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 638,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 639,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 653,
			'NodeResNode' => '607',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 654,
			'NodeResNode' => '607',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 655,
			'NodeResNode' => '607',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 656,
			'NodeResNode' => '275',
			'NodeResEng' => 'Outdoor public space (includes roads, sidewalks, parks, etc.)',
			'NodeResValue' => '352'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 657,
			'NodeResNode' => '275',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Home, private residence, or dorm (includes just outside the residence)',
			'NodeResValue' => '349'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 658,
			'NodeResNode' => '275',
			'NodeResOrd' => '2',
			'NodeResEng' => 'School',
			'NodeResValue' => '404'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 659,
			'NodeResNode' => '275',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Workplace',
			'NodeResValue' => '350'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 660,
			'NodeResNode' => '275',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Airport',
			'NodeResValue' => '351'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 661,
			'NodeResNode' => '275',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Indoor public space',
			'NodeResValue' => '353'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 662,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 663,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 664,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 668,
			'NodeResNode' => '612',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 669,
			'NodeResNode' => '612',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 670,
			'NodeResNode' => '612',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 671,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes, wearing uniform',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 672,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No, wearing plain clothes',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 673,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 674,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 675,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 676,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 677,
			'NodeResNode' => '615',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 678,
			'NodeResNode' => '615',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 679,
			'NodeResNode' => '615',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 680,
			'NodeResNode' => '614',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 681,
			'NodeResNode' => '614',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 682,
			'NodeResNode' => '614',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 694,
			'NodeResNode' => '392',
			'NodeResEng' => 'Speeding',
			'NodeResValue' => '174'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 695,
			'NodeResNode' => '392',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Vehicle Defect',
			'NodeResValue' => '175'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 696,
			'NodeResNode' => '392',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Records Violation',
			'NodeResValue' => '176'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 697,
			'NodeResNode' => '392',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Illegal Turn or Lane Change',
			'NodeResValue' => '177'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 698,
			'NodeResNode' => '392',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Seatbelt or Cell Phone Violation',
			'NodeResValue' => '178'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 699,
			'NodeResNode' => '392',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Stop Sign/Light Violation',
			'NodeResValue' => '179'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 700,
			'NodeResNode' => '392',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Disorderly Conduct',
			'NodeResValue' => '180'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 701,
			'NodeResNode' => '392',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Disturbing the Peace',
			'NodeResValue' => '181'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 702,
			'NodeResNode' => '392',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Loitering/Trespassing',
			'NodeResValue' => '402'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 703,
			'NodeResNode' => '392',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Failure to Obey/Comply',
			'NodeResValue' => '182'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 704,
			'NodeResNode' => '392',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Public Intoxication',
			'NodeResValue' => '183'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 705,
			'NodeResNode' => '392',
			'NodeResOrd' => '11',
			'NodeResEng' => 'Marijuana Possession',
			'NodeResValue' => '184'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 706,
			'NodeResNode' => '392',
			'NodeResOrd' => '12',
			'NodeResEng' => 'Weapons Violation',
			'NodeResValue' => '413'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 707,
			'NodeResNode' => '393',
			'NodeResEng' => 'Walking Violation',
			'NodeResValue' => '185'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 708,
			'NodeResNode' => '393',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Disorderly Conduct',
			'NodeResValue' => '186'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 709,
			'NodeResNode' => '393',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Disturbing the Peace',
			'NodeResValue' => '187'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 710,
			'NodeResNode' => '393',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Failure to Obey/Comply',
			'NodeResValue' => '188'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 711,
			'NodeResNode' => '393',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Public Intoxication',
			'NodeResValue' => '189'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 712,
			'NodeResNode' => '393',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Loitering/Trespassing',
			'NodeResValue' => '403'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 713,
			'NodeResNode' => '393',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Marijuana Possession',
			'NodeResValue' => '190'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 714,
			'NodeResNode' => '393',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Weapons Violation',
			'NodeResValue' => '412'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 715,
			'NodeResNode' => '0',
			'NodeResEng' => 'No or does not apply',
			'NodeResValue' => '276'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 716,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Displayed Weapon',
			'NodeResValue' => '277'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 717,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Drew Weapon',
			'NodeResValue' => '278'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 718,
			'NodeResNode' => '0',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Pointed Weapon',
			'NodeResValue' => '279'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 719,
			'NodeResNode' => '0',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Weapon Fired/Discharged',
			'NodeResValue' => '280'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 720,
			'NodeResNode' => '0',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '281'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 727,
			'NodeResNode' => '0',
			'NodeResEng' => 'Baton',
			'NodeResValue' => '282'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 728,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Taser',
			'NodeResValue' => '283'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 729,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Gun',
			'NodeResValue' => '284'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 730,
			'NodeResNode' => '0',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Mace or Pepper Spray',
			'NodeResValue' => '285'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 731,
			'NodeResNode' => '0',
			'NodeResOrd' => '4',
			'NodeResEng' => 'K9 (Dog)',
			'NodeResValue' => '286'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 732,
			'NodeResNode' => '0',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Other',
			'NodeResValue' => '287'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 733,
			'NodeResNode' => '617',
			'NodeResEng' => 'Gun',
			'NodeResValue' => '415'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 734,
			'NodeResNode' => '617',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Knife',
			'NodeResValue' => '416'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 735,
			'NodeResNode' => '617',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Other',
			'NodeResValue' => '417'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 742,
			'NodeResNode' => '613',
			'NodeResEng' => 'On Foot',
			'NodeResValue' => '408'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 743,
			'NodeResNode' => '613',
			'NodeResOrd' => '1',
			'NodeResEng' => 'In Vehicles',
			'NodeResValue' => '409'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 744,
			'NodeResNode' => '613',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Both',
			'NodeResValue' => '410'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 745,
			'NodeResNode' => '613',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '414'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 746,
			'NodeResNode' => '616',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 747,
			'NodeResNode' => '616',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 748,
			'NodeResNode' => '616',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 749,
			'NodeResNode' => '0',
			'NodeResEng' => 'No or does not apply',
			'NodeResValue' => '276'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 750,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Displayed Weapon',
			'NodeResValue' => '277'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 751,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Drew Weapon',
			'NodeResValue' => '278'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 752,
			'NodeResNode' => '0',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Pointed Weapon',
			'NodeResValue' => '279'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 753,
			'NodeResNode' => '0',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Weapon Fired/Discharged',
			'NodeResValue' => '280'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 754,
			'NodeResNode' => '0',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '281'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 755,
			'NodeResNode' => '618',
			'NodeResEng' => 'No or does not apply',
			'NodeResValue' => '276'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 756,
			'NodeResNode' => '618',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Displayed Weapon',
			'NodeResValue' => '277'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 757,
			'NodeResNode' => '618',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Drew Weapon',
			'NodeResValue' => '278'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 758,
			'NodeResNode' => '618',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Pointed Weapon',
			'NodeResValue' => '279'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 759,
			'NodeResNode' => '618',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Weapon Fired/Discharged',
			'NodeResValue' => '280'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 760,
			'NodeResNode' => '618',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '281'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 761,
			'NodeResNode' => '0',
			'NodeResEng' => 'Fist (Closed Hand)',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 762,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Slap (Open Hand)',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 763,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Kick (Feet)',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 764,
			'NodeResNode' => '0',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Knee',
			'NodeResValue' => '240'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 765,
			'NodeResNode' => '0',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Elbow',
			'NodeResValue' => '241'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 766,
			'NodeResNode' => '0',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Head',
			'NodeResValue' => '242'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 779,
			'NodeResNode' => '620',
			'NodeResEng' => 'Fist (Closed Hand)',
			'NodeResValue' => '237'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 780,
			'NodeResNode' => '620',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Slap (Open Hand)',
			'NodeResValue' => '238'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 781,
			'NodeResNode' => '620',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Kick (Feet)',
			'NodeResValue' => '239'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 782,
			'NodeResNode' => '620',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Knee',
			'NodeResValue' => '240'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 783,
			'NodeResNode' => '620',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Elbow',
			'NodeResValue' => '241'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 784,
			'NodeResNode' => '620',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Head',
			'NodeResValue' => '242'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 785,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 786,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 787,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 788,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 789,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 790,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 791,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 792,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 793,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 794,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 795,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 796,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 797,
			'NodeResNode' => '0',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 798,
			'NodeResNode' => '0',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 799,
			'NodeResNode' => '0',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 800,
			'NodeResNode' => '622',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 801,
			'NodeResNode' => '622',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 802,
			'NodeResNode' => '622',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 803,
			'NodeResNode' => '625',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 804,
			'NodeResNode' => '625',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 805,
			'NodeResNode' => '625',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 806,
			'NodeResNode' => '623',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 807,
			'NodeResNode' => '623',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 808,
			'NodeResNode' => '623',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 809,
			'NodeResNode' => '626',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 810,
			'NodeResNode' => '626',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 811,
			'NodeResNode' => '626',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 812,
			'NodeResNode' => '624',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 813,
			'NodeResNode' => '624',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 814,
			'NodeResNode' => '624',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 815,
			'NodeResNode' => '627',
			'NodeResEng' => 'Yes',
			'NodeResValue' => 'Y',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 816,
			'NodeResNode' => '627',
			'NodeResOrd' => '1',
			'NodeResEng' => 'No',
			'NodeResValue' => 'N'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 817,
			'NodeResNode' => '627',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Not sure',
			'NodeResValue' => '?',
			'NodeResShowKids' => '1'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 818,
			'NodeResNode' => '386',
			'NodeResEng' => 'Assault on an Officer',
			'NodeResValue' => '133'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 819,
			'NodeResNode' => '386',
			'NodeResOrd' => '1',
			'NodeResEng' => 'Disorderly Conduct',
			'NodeResValue' => '134'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 820,
			'NodeResNode' => '386',
			'NodeResOrd' => '2',
			'NodeResEng' => 'Disturbing the Peace',
			'NodeResValue' => '135'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 821,
			'NodeResNode' => '386',
			'NodeResOrd' => '3',
			'NodeResEng' => 'Loitering/Trespassing',
			'NodeResValue' => '401'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 822,
			'NodeResNode' => '386',
			'NodeResOrd' => '4',
			'NodeResEng' => 'Failure to Obey/Comply',
			'NodeResValue' => '136'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 823,
			'NodeResNode' => '386',
			'NodeResOrd' => '5',
			'NodeResEng' => 'Obstructing/Interfering',
			'NodeResValue' => '137'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 824,
			'NodeResNode' => '386',
			'NodeResOrd' => '6',
			'NodeResEng' => 'Resisting Arrest',
			'NodeResValue' => '138'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 825,
			'NodeResNode' => '386',
			'NodeResOrd' => '7',
			'NodeResEng' => 'Public Intoxication',
			'NodeResValue' => '139'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 826,
			'NodeResNode' => '386',
			'NodeResOrd' => '8',
			'NodeResEng' => 'Marijuana Possession',
			'NodeResValue' => '140'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 827,
			'NodeResNode' => '386',
			'NodeResOrd' => '9',
			'NodeResEng' => 'Illegal Drugs Other Than Marijuana',
			'NodeResValue' => '141'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 828,
			'NodeResNode' => '386',
			'NodeResOrd' => '10',
			'NodeResEng' => 'Weapons Violation',
			'NodeResValue' => '411'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 829,
			'NodeResNode' => '173',
			'NodeResEng' => '16-24',
			'NodeResValue' => '102'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 830,
			'NodeResNode' => '173',
			'NodeResOrd' => '1',
			'NodeResEng' => '25-34',
			'NodeResValue' => '103'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 831,
			'NodeResNode' => '173',
			'NodeResOrd' => '2',
			'NodeResEng' => '35-44',
			'NodeResValue' => '104'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 832,
			'NodeResNode' => '173',
			'NodeResOrd' => '3',
			'NodeResEng' => '45-54',
			'NodeResValue' => '105'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 833,
			'NodeResNode' => '173',
			'NodeResOrd' => '4',
			'NodeResEng' => '55-64',
			'NodeResValue' => '106'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 834,
			'NodeResNode' => '173',
			'NodeResOrd' => '5',
			'NodeResEng' => '65-74',
			'NodeResValue' => '107'
		]);
		DB::table('SL_NodeResponses')->insert([
			'NodeResID' => 835,
			'NodeResNode' => '173',
			'NodeResOrd' => '6',
			'NodeResEng' => '75-84',
			'NodeResValue' => '108'
		]);
		
		DB::table('SL_Conditions')->insert([
			'CondID' => 1,
			'CondTag' => '#NotAnonymized',
			'CondDesc' => 'Complaint data has not been anonymized.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '393',
			'CondTable' => '112',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 2,
			'CondTag' => '#ComplainantInvolved',
			'CondDesc' => 'The complainant was a victim or witness, not a third-party assistant.',
			'CondOperDeet' => '0',
			'CondField' => '990',
			'CondTable' => '102',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 3,
			'CondTag' => '#NotFemale',
			'CondDesc' => 'The civilian is not female.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '628',
			'CondTable' => '102',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 4,
			'CondTag' => '#HasEvent',
			'CondDesc' => 'Complaint has at least one gold-level event described.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 5,
			'CondTag' => '#HasMultipleDepartment',
			'CondDesc' => 'Complaint is associated with more than one police department.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '1',
			'CondField' => '0',
			'CondTable' => '111',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 6,
			'CondTag' => '#OfficerNotFemale',
			'CondDesc' => 'The officer is not female.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '628',
			'CondTable' => '153',
			'CondLoop' => '4'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 7,
			'CondTag' => '#Gold',
			'CondDesc' => 'Complainant has gone gold.',
			'CondOperDeet' => '0',
			'CondField' => '1031',
			'CondTable' => '112',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 8,
			'CondTag' => '#HasMultipleOfficer',
			'CondDesc' => 'Complaint is associated with more than one police officer.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '1',
			'CondField' => '0',
			'CondTable' => '104',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 9,
			'CondTag' => '#HasMultipleVictim',
			'CondDesc' => 'Complaint has more than one victim.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '1',
			'CondField' => '0',
			'CondTable' => '102',
			'CondLoop' => '1'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 10,
			'CondTag' => '#VehicleStop',
			'CondDesc' => 'Complaint scene was a vehicle stop.',
			'CondOperDeet' => '0',
			'CondField' => '249',
			'CondTable' => '115',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 11,
			'CondTag' => '#NotVehicleStop',
			'CondDesc' => 'Complaint scene was not a vehicle stop.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '249',
			'CondTable' => '115',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 12,
			'CondTag' => '#NotOnPrivateProperty',
			'CondDesc' => 'Complaint scene was not a home nor a workplace.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '249',
			'CondTable' => '115',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 13,
			'CondTag' => '#ForceControlHold',
			'CondDesc' => 'Use of force involved a control hold.',
			'CondOperDeet' => '0',
			'CondField' => '256',
			'CondTable' => '116',
			'CondLoop' => '6'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 14,
			'CondTag' => '#ForceBodyWeapons',
			'CondDesc' => 'Use of force involved body weapons.',
			'CondOperDeet' => '0',
			'CondField' => '256',
			'CondTable' => '116',
			'CondLoop' => '6'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 15,
			'CondTag' => '#ForceTakedown',
			'CondDesc' => 'Use of force involved a takedown.',
			'CondOperDeet' => '0',
			'CondField' => '256',
			'CondTable' => '116',
			'CondLoop' => '6'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 16,
			'CondTag' => '#ForceGun',
			'CondDesc' => 'Use of force involved a gun.',
			'CondOperDeet' => '0',
			'CondField' => '256',
			'CondTable' => '116',
			'CondLoop' => '6'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 17,
			'CondTag' => '#EventIsForceAnimal',
			'CondDesc' => 'Current event (being edited) is a use of force against an animal.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '860',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 18,
			'CondTag' => '#HasInjury',
			'CondDesc' => 'Complaint has at least one injury described.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '117',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 19,
			'CondTag' => '#HasForceHuman',
			'CondDesc' => 'Complaint include the use of force against a human (not a pet).',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 20,
			'CondTag' => '#HasInjuryCare',
			'CondDesc' => 'Current event (being edited) is a search.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '146',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 21,
			'CondTag' => '#Anonymized',
			'CondDesc' => 'Complaint data has been anonymized.',
			'CondOperDeet' => '0',
			'CondField' => '393',
			'CondTable' => '112',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 22,
			'CondTag' => '#NotLoggedIn',
			'CondDesc' => 'Complainant is not currently logged into the system.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 23,
			'CondTag' => '#VictimsWithoutArrests',
			'CondDesc' => 'Complaint has victims who were not arrested.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 24,
			'CondTag' => '#AllegationNoForce',
			'CondDesc' => 'Complaint has no unreasonable use of force allegations.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 25,
			'CondTag' => '#HasArrestOrForce',
			'CondDesc' => 'Complaint has at least one arrest or use of force event.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 26,
			'CondTag' => '#AllegationCheck1',
			'CondDesc' => 'Complaint has no allegations other than possible wrongful stop, miranda rights read, and police refusing to provide ID.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 27,
			'CondTag' => '#EventIsStop',
			'CondDesc' => 'Current event (being edited) is a stop.',
			'CondOperDeet' => '0',
			'CondField' => '1154',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 28,
			'CondTag' => '#PreviousEnteredStops',
			'CondDesc' => 'Complainant has already entered at least one other stop event.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 29,
			'CondTag' => '#EventIsSearch',
			'CondDesc' => 'Current event (being edited) is a search.',
			'CondOperDeet' => '0',
			'CondField' => '1154',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 30,
			'CondTag' => '#PreviousEnteredSearches',
			'CondDesc' => 'Complainant has already entered at least one other search event.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 31,
			'CondTag' => '#EventIsForce',
			'CondDesc' => 'Current event (being edited) is a use of force.',
			'CondOperDeet' => '0',
			'CondField' => '1154',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 32,
			'CondTag' => '#PreviousEnteredForce',
			'CondDesc' => 'Complainant has already entered at least one other use of force event.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 33,
			'CondTag' => '#EventIsArrest',
			'CondDesc' => 'Current event (being edited) is an arrest.',
			'CondOperDeet' => '0',
			'CondField' => '1154',
			'CondTable' => '137',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 34,
			'CondTag' => '#PreviousEnteredArrests',
			'CondDesc' => 'Complainant has already entered at least one other arrest event.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 35,
			'CondTag' => '#Property',
			'CondDesc' => 'Complaint includes destruction or seizure.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 36,
			'CondTag' => '#ForceHasSubType',
			'CondDesc' => 'Use of force involved a control hold, body weapons, a takedown, and/or a gun..',
			'CondOperDeet' => '0',
			'CondField' => '256',
			'CondTable' => '116',
			'CondLoop' => '6'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 37,
			'CondTag' => '#HasArrestCharges',
			'CondDesc' => 'Complaint arrest has charges associated with it.',
			'CondOperator' => 'CUSTOM',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '0',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 38,
			'CondTag' => '#HasForce',
			'CondDesc' => 'Complaint has at least one use of force described.',
			'CondOperator' => 'EXISTS>',
			'CondOperDeet' => '0',
			'CondField' => '0',
			'CondTable' => '116',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 39,
			'CondTag' => '#NotAnonymous',
			'CondDesc' => 'Complaint was not submitted anonymously, nor was it anonymized.',
			'CondOperator' => '}',
			'CondOperDeet' => '0',
			'CondField' => '393',
			'CondTable' => '112',
			'CondLoop' => '0',
			'CondOpts' => '2'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 40,
			'CondTag' => '#IsVictim',
			'CondDesc' => 'Current civilian is a Victim.',
			'CondOperDeet' => '0',
			'CondField' => '990',
			'CondTable' => '102',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 41,
			'CondTag' => '#IsWitness',
			'CondDesc' => 'Current civilian is a Witness.',
			'CondOperDeet' => '0',
			'CondField' => '990',
			'CondTable' => '102',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 42,
			'CondTag' => '#IsComplainant',
			'CondDesc' => 'Current civilian is the Complainant.',
			'CondOperDeet' => '0',
			'CondField' => '984',
			'CondTable' => '102',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 43,
			'CondTag' => '#StopGivenCitation',
			'CondDesc' => 'Current stop resulting in citation charges.',
			'CondOperDeet' => '0',
			'CondField' => '1084',
			'CondTable' => '121',
			'CondLoop' => '0'
		]);
		DB::table('SL_Conditions')->insert([
			'CondID' => 44,
			'CondTag' => '#SilverHasArrest',
			'CondDesc' => 'Silver complaint has arrest.',
			'CondOperDeet' => '0',
			'CondField' => '1102',
			'CondTable' => '156',
			'CondLoop' => '0'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 1,
			'CondValCondID' => '1',
			'CondValValue' => '207'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 2,
			'CondValCondID' => '2',
			'CondValValue' => 'Witness'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 3,
			'CondValCondID' => '2',
			'CondValValue' => 'Victim'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 4,
			'CondValCondID' => '3',
			'CondValValue' => 'F'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 7,
			'CondValCondID' => '6',
			'CondValValue' => 'F'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 10,
			'CondValCondID' => '10',
			'CondValValue' => '248'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 11,
			'CondValCondID' => '11',
			'CondValValue' => '248'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 12,
			'CondValCondID' => '12',
			'CondValValue' => '249'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 13,
			'CondValCondID' => '12',
			'CondValValue' => '250'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 14,
			'CondValCondID' => '17',
			'CondValValue' => 'Y'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 17,
			'CondValCondID' => '21',
			'CondValValue' => '207'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 18,
			'CondValCondID' => '27',
			'CondValValue' => 'Stops'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 19,
			'CondValCondID' => '29',
			'CondValValue' => 'Searches'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 20,
			'CondValCondID' => '31',
			'CondValValue' => 'Force'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 21,
			'CondValCondID' => '33',
			'CondValValue' => 'Arrests'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 23,
			'CondValCondID' => '39',
			'CondValValue' => '206'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 24,
			'CondValCondID' => '39',
			'CondValValue' => '207'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 25,
			'CondValCondID' => '40',
			'CondValValue' => 'Victim'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 26,
			'CondValCondID' => '41',
			'CondValValue' => 'Witness'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 27,
			'CondValCondID' => '42',
			'CondValValue' => 'Y'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 28,
			'CondValCondID' => '43',
			'CondValValue' => 'Y'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 29,
			'CondValCondID' => '36',
			'CondValValue' => '127'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 30,
			'CondValCondID' => '36',
			'CondValValue' => '128'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 31,
			'CondValCondID' => '36',
			'CondValValue' => '129'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 32,
			'CondValCondID' => '36',
			'CondValValue' => '132'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 33,
			'CondValCondID' => '13',
			'CondValValue' => '127'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 34,
			'CondValCondID' => '14',
			'CondValValue' => '128'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 35,
			'CondValCondID' => '15',
			'CondValValue' => '129'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 36,
			'CondValCondID' => '16',
			'CondValValue' => '132'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 37,
			'CondValCondID' => '7',
			'CondValValue' => 'Gold'
		]);
		DB::table('SL_ConditionsVals')->insert([
			'CondValID' => 38,
			'CondValCondID' => '44',
			'CondValValue' => 'Y'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 1,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '16'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 2,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '17'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 3,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '22'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 4,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '23'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 5,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '26'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 6,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '27'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 7,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '41'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 8,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '44'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 9,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '50'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 10,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '51'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 11,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '52'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 12,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '53'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 13,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '56'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 14,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '70'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 15,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '75'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 16,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '76'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 17,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '447'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 18,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '92'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 19,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '93'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 20,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '94'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 21,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '95'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 22,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '102'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 23,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '115'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 24,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '117'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 25,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '132'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 26,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '133'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 27,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '134'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 28,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '135'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 29,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '165'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 30,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '176'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 31,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '190'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 32,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '191'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 33,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '192'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 34,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '194'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 35,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '279'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 36,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '280'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 37,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '282'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 38,
			'CondNodeCondID' => '1',
			'CondNodeNodeID' => '453'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 39,
			'CondNodeCondID' => '2',
			'CondNodeNodeID' => '47'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 40,
			'CondNodeCondID' => '2',
			'CondNodeNodeID' => '48'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 41,
			'CondNodeCondID' => '3',
			'CondNodeNodeID' => '81'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 42,
			'CondNodeCondID' => '3',
			'CondNodeNodeID' => '121'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 43,
			'CondNodeCondID' => '4',
			'CondNodeNodeID' => '148'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 44,
			'CondNodeCondID' => '4',
			'CondNodeNodeID' => '485'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 45,
			'CondNodeCondID' => '5',
			'CondNodeNodeID' => '162'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 46,
			'CondNodeCondID' => '6',
			'CondNodeNodeID' => '180'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 47,
			'CondNodeCondID' => '7',
			'CondNodeNodeID' => '196'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 48,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '206'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 49,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '211'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 50,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '214'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 51,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '219'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 52,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '224'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 53,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '229'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 54,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '236'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 55,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '241'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 56,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '244'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 57,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '249'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 58,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '253'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 59,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '257'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 60,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '262'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 61,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '263'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 62,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '428'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 63,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '487'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 64,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '495'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 65,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '498'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 66,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '499'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 67,
			'CondNodeCondID' => '8',
			'CondNodeNodeID' => '593'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 68,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '207'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 69,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '215'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 70,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '220'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 71,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '225'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 72,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '230'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 73,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '233'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 74,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '237'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 75,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '245'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 76,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '250'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 77,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '254'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 78,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '258'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 79,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '271'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 80,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '272'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 81,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '273'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 82,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '429'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 83,
			'CondNodeCondID' => '9',
			'CondNodeNodeID' => '594'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 84,
			'CondNodeCondID' => '10',
			'CondNodeNodeID' => '297'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 85,
			'CondNodeCondID' => '10',
			'CondNodeNodeID' => '392'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 86,
			'CondNodeCondID' => '11',
			'CondNodeNodeID' => '299'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 87,
			'CondNodeCondID' => '11',
			'CondNodeNodeID' => '393'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 88,
			'CondNodeCondID' => '11',
			'CondNodeNodeID' => '490'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 89,
			'CondNodeCondID' => '12',
			'CondNodeNodeID' => '301'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 90,
			'CondNodeCondID' => '13',
			'CondNodeNodeID' => '344'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 91,
			'CondNodeCondID' => '14',
			'CondNodeNodeID' => '345'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 92,
			'CondNodeCondID' => '15',
			'CondNodeNodeID' => '346'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 93,
			'CondNodeCondID' => '16',
			'CondNodeNodeID' => '347'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 94,
			'CondNodeCondID' => '17',
			'CondNodeNodeID' => '351'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 95,
			'CondNodeCondID' => '18',
			'CondNodeNodeID' => '357'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 96,
			'CondNodeCondID' => '18',
			'CondNodeNodeID' => '519'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 97,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '357'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 98,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '414'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 99,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '519'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 100,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '517'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 101,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '518'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 102,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '520'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 103,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '521'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 104,
			'CondNodeCondID' => '19',
			'CondNodeNodeID' => '522'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 105,
			'CondNodeCondID' => '20',
			'CondNodeNodeID' => '414'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 106,
			'CondNodeCondID' => '21',
			'CondNodeNodeID' => '445'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 107,
			'CondNodeCondID' => '22',
			'CondNodeNodeID' => '454'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 108,
			'CondNodeCondID' => '23',
			'CondNodeNodeID' => '473'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 109,
			'CondNodeCondID' => '24',
			'CondNodeNodeID' => '476'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 110,
			'CondNodeCondID' => '25',
			'CondNodeNodeID' => '479'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 111,
			'CondNodeCondID' => '26',
			'CondNodeNodeID' => '480'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 112,
			'CondNodeCondID' => '26',
			'CondNodeNodeID' => '481'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 113,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '487'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 114,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '486'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 115,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '488'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 116,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '489'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 117,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '490'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 118,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '491'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 119,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '492'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 120,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '493'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 121,
			'CondNodeCondID' => '28',
			'CondNodeNodeID' => '486'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 122,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '495'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 123,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '494'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 124,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '500'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 125,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '501'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 126,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '502'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 127,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '503'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 128,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '504'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 129,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '505'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 130,
			'CondNodeCondID' => '29',
			'CondNodeNodeID' => '506'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 131,
			'CondNodeCondID' => '30',
			'CondNodeNodeID' => '494'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 132,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '498'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 133,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '496'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 134,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '507'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 135,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '508'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 136,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '509'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 137,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '510'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 138,
			'CondNodeCondID' => '31',
			'CondNodeNodeID' => '511'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 139,
			'CondNodeCondID' => '32',
			'CondNodeNodeID' => '496'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 140,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '497'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 141,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '499'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 142,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '512'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 143,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '513'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 144,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '514'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 145,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '515'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 146,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '516'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 147,
			'CondNodeCondID' => '33',
			'CondNodeNodeID' => '599'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 148,
			'CondNodeCondID' => '34',
			'CondNodeNodeID' => '497'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 149,
			'CondNodeCondID' => '35',
			'CondNodeNodeID' => '506'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 150,
			'CondNodeCondID' => '36',
			'CondNodeNodeID' => '508'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 151,
			'CondNodeCondID' => '37',
			'CondNodeNodeID' => '516'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 152,
			'CondNodeCondID' => '38',
			'CondNodeNodeID' => '517'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 153,
			'CondNodeCondID' => '39',
			'CondNodeNodeID' => '565'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 154,
			'CondNodeCondID' => '39',
			'CondNodeNodeID' => '566'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 155,
			'CondNodeCondID' => '40',
			'CondNodeLoopID' => '1'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 156,
			'CondNodeCondID' => '41',
			'CondNodeLoopID' => '2'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 157,
			'CondNodeCondID' => '42',
			'CondNodeLoopID' => '7'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 158,
			'CondNodeCondID' => '43',
			'CondNodeLoopID' => '15'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 159,
			'CondNodeCondID' => '44',
			'CondNodeNodeID' => '610'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 160,
			'CondNodeCondID' => '44',
			'CondNodeNodeID' => '-3'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 161,
			'CondNodeCondID' => '44',
			'CondNodeNodeID' => '611'
		]);
		DB::table('SL_ConditionsNodes')->insert([
			'CondNodeID' => 162,
			'CondNodeCondID' => '27',
			'CondNodeNodeID' => '621'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 1,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '55',
			'DataLoopPlural' => 'Victims',
			'DataLoopSingular' => 'Victim',
			'DataLoopTable' => 'Civilians',
			'DataLoopMaxLimit' => '3',
			'DataLoopWarnLimit' => '1',
			'DataLoopMinLimit' => '1'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 2,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '97',
			'DataLoopPlural' => 'Witnesses',
			'DataLoopSingular' => 'Witness',
			'DataLoopTable' => 'Civilians',
			'DataLoopMaxLimit' => '3',
			'DataLoopWarnLimit' => '1'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 3,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '143',
			'DataLoopPlural' => 'Departments',
			'DataLoopSingular' => 'Department',
			'DataLoopTable' => 'LinksComplaintDept',
			'DataLoopMaxLimit' => '3',
			'DataLoopWarnLimit' => '2',
			'DataLoopMinLimit' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 4,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '160',
			'DataLoopPlural' => 'Officers',
			'DataLoopSingular' => 'Officer',
			'DataLoopTable' => 'Officers',
			'DataLoopMaxLimit' => '5',
			'DataLoopWarnLimit' => '2',
			'DataLoopMinLimit' => '1'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 6,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '148',
			'DataLoopPlural' => 'Events',
			'DataLoopSingular' => 'Event',
			'DataLoopTable' => 'EventSequence',
			'DataLoopSortFld' => 'EveOrder',
			'DataLoopDoneFld' => 'EventSequence:EveUserFinished',
			'DataLoopIsStep' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 7,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '458',
			'DataLoopPlural' => 'Complainants',
			'DataLoopSingular' => 'Complainant',
			'DataLoopTable' => 'Civilians',
			'DataLoopDoneFld' => 'Civilians:CivHadVehicle',
			'DataLoopMaxLimit' => '1',
			'DataLoopWarnLimit' => '-1',
			'DataLoopMinLimit' => '1',
			'DataLoopIsStep' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 14,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '357',
			'DataLoopPlural' => 'Injuries',
			'DataLoopSingular' => 'Injury',
			'DataLoopTable' => 'Injuries',
			'DataLoopDoneFld' => 'Injuries:InjDescription',
			'DataLoopIsStep' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 15,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '400',
			'DataLoopPlural' => 'Citations',
			'DataLoopSingular' => 'Citation',
			'DataLoopTable' => 'Stops',
			'DataLoopDoneFld' => 'Stops:StopChargesOther',
			'DataLoopIsStep' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataLoop')->insert([
			'DataLoopID' => 16,
			'DataLoopTree' => '1',
			'DataLoopRoot' => '414',
			'DataLoopPlural' => 'Medical Care',
			'DataLoopSingular' => 'Medical Care',
			'DataLoopTable' => 'InjuryCare',
			'DataLoopDoneFld' => 'InjuryCare:InjCareEmergencyOnScene',
			'DataLoopIsStep' => '1',
			'DataLoopAutoGen' => '0'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 4,
			'DataSubTree' => '1',
			'DataSubTbl' => 'EventSequence',
			'DataSubSubTbl' => 'Searches',
			'DataSubSubLnk' => 'SrchEventSequenceID'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 5,
			'DataSubTree' => '1',
			'DataSubTbl' => 'EventSequence',
			'DataSubSubTbl' => 'Force',
			'DataSubSubLnk' => 'ForEventSequenceID'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 6,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Officers',
			'DataSubTblLnk' => 'OffPersonID',
			'DataSubSubTbl' => 'PersonContact',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 7,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Officers',
			'DataSubTblLnk' => 'OffPhysDescID',
			'DataSubSubTbl' => 'PhysicalDesc',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 8,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Civilians',
			'DataSubTblLnk' => 'CivPersonID',
			'DataSubSubTbl' => 'PersonContact',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 9,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Civilians',
			'DataSubTblLnk' => 'CivPhysDescID',
			'DataSubSubTbl' => 'PhysicalDesc',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 10,
			'DataSubTree' => '1',
			'DataSubTbl' => 'EventSequence',
			'DataSubSubTbl' => 'Stops',
			'DataSubSubLnk' => 'StopEventSequenceID'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 14,
			'DataSubTree' => '1',
			'DataSubTbl' => 'EventSequence',
			'DataSubSubTbl' => 'Arrests',
			'DataSubSubLnk' => 'ArstEventSequenceID'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 25,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Complaints',
			'DataSubSubTbl' => 'Incidents',
			'DataSubSubLnk' => 'IncComplaintID',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 27,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Complaints',
			'DataSubSubTbl' => 'Scenes',
			'DataSubSubLnk' => 'ScnComplaintID',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 29,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Complaints',
			'DataSubSubTbl' => 'AllegSilver',
			'DataSubSubLnk' => 'AlleSilComplaintID',
			'DataSubAutoGen' => '1'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 30,
			'DataSubTree' => '1',
			'DataSubTbl' => 'LinksComplaintDept',
			'DataSubTblLnk' => 'LnkComDeptDeptID',
			'DataSubSubTbl' => 'Departments'
		]);
		DB::table('SL_DataSubsets')->insert([
			'DataSubID' => 31,
			'DataSubTree' => '1',
			'DataSubTbl' => 'Complaints',
			'DataSubSubTbl' => 'Evidence',
			'DataSubSubLnk' => 'EvidComplaintID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 1,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Stops',
			'DataHelpTable' => 'StopReasons',
			'DataHelpKeyField' => 'StopReasStopID',
			'DataHelpValueField' => 'StopReasReason'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 2,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Searches',
			'DataHelpTable' => 'SearchContra',
			'DataHelpKeyField' => 'SrchConSearchID',
			'DataHelpValueField' => 'SrchConType'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 3,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Force',
			'DataHelpTable' => 'ForceSubType',
			'DataHelpKeyField' => 'ForceSubForceID',
			'DataHelpValueField' => 'ForceSubType'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 4,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Force',
			'DataHelpTable' => 'BodyParts',
			'DataHelpKeyField' => 'BodyForceID',
			'DataHelpValueField' => 'BodyPart'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 5,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Injuries',
			'DataHelpTable' => 'BodyParts',
			'DataHelpKeyField' => 'BodyInjuryID',
			'DataHelpValueField' => 'BodyPart'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 6,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Arrests',
			'DataHelpTable' => 'Charges',
			'DataHelpKeyField' => 'ChrgArrestID',
			'DataHelpValueField' => 'ChrgCharges'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 7,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Stops',
			'DataHelpTable' => 'Charges',
			'DataHelpKeyField' => 'ChrgStopID',
			'DataHelpValueField' => 'ChrgCharges'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 8,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Searches',
			'DataHelpTable' => 'SearchSeize',
			'DataHelpKeyField' => 'SrchSeizSearchID',
			'DataHelpValueField' => 'SrchSeizType'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 15,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Civilians',
			'DataHelpTable' => 'Injuries',
			'DataHelpKeyField' => 'InjSubjectID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 16,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Civilians',
			'DataHelpTable' => 'InjuryCare',
			'DataHelpKeyField' => 'InjCareSubjectID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 20,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'EventSequence',
			'DataHelpTable' => 'Allegations',
			'DataHelpKeyField' => 'AlleEventSequenceID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 21,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Complaints',
			'DataHelpTable' => 'Allegations',
			'DataHelpKeyField' => 'AlleComplaintID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 22,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Allegations',
			'DataHelpTable' => 'LinksCivilianAllegations',
			'DataHelpKeyField' => 'LnkCivAlleAlleID',
			'DataHelpValueField' => 'LnkCivAlleCivID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 23,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Allegations',
			'DataHelpTable' => 'LinksOfficerAllegations',
			'DataHelpKeyField' => 'LnkOffAlleAlleID',
			'DataHelpValueField' => 'LnkOffAlleOffID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 24,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'EventSequence',
			'DataHelpTable' => 'LinksCivilianEvents',
			'DataHelpKeyField' => 'LnkCivEveEveID',
			'DataHelpValueField' => 'LnkCivEveCivID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 25,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'EventSequence',
			'DataHelpTable' => 'LinksOfficerEvents',
			'DataHelpKeyField' => 'LnkOffEveEveID',
			'DataHelpValueField' => 'LnkOffEveOffID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 26,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Orders',
			'DataHelpTable' => 'LinksCivilianOrders',
			'DataHelpKeyField' => 'LnkCivOrdOrdID',
			'DataHelpValueField' => 'LnkCivOrdCivID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 27,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'Orders',
			'DataHelpTable' => 'LinksOfficerOrders',
			'DataHelpKeyField' => 'LnkOffOrdOrdID',
			'DataHelpValueField' => 'LnkOffOrdOffID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 28,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'EventSequence',
			'DataHelpTable' => 'Orders',
			'DataHelpKeyField' => 'OrdEventSequenceID'
		]);
		DB::table('SL_DataHelpers')->insert([
			'DataHelpID' => 29,
			'DataHelpTree' => '1',
			'DataHelpParentTable' => 'PhysicalDesc',
			'DataHelpTable' => 'PhysicalDescRace',
			'DataHelpKeyField' => 'PhysRacePhysDescID',
			'DataHelpValueField' => 'PhysRaceRace'
		]);
		DB::table('SL_DataLinks')->insert([
			'DataLinkID' => 1,
			'DataLinkTree' => '1',
			'DataLinkTable' => '163'
		]);
		DB::table('SL_DataLinks')->insert([
			'DataLinkID' => 4,
			'DataLinkTree' => '1',
			'DataLinkTable' => '155'
		]);
		
		
		

    }
}