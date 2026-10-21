<?php
    $dbHost = 'aws-0-ap-northeast-2.pooler.supabase.com';
    $dbUser = 'postgres.vmgtrzrzykyglqqjecra';
    $dbPassword = 'Coolcars310.';

    $conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser password=$dbPassword sslmode=require");

    if(!$conn){
        exit('Database connection failed');
    }
?>