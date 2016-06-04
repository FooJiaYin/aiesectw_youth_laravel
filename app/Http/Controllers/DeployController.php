<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DeployController extends Controller
{
    public function deploy(Request $request){
        if(substr($request->header('User-Agent'), 0,15)=='GitHub-Hookshot'){
            $data = array(
                'LOCAL_ROOT'      => '/srv/www/youthimpact.aiesec.org.tw/',
                'LOCAL_REPO_NAME' => 'aiesectw_youth_laravel',
                'LOCAL_REPO'      => '/srv/www/youthimpact.aiesec.org.tw/aiesectw_youth_laravel',
                'REMOTE_REPO'     => 'git@github.com:kent62001/aiesectw_youth_laravel.git',
                'BRANCH'          => 'master'
            );

            $OK = $this->doexec($data);
            return response()->json(array('success'=>$OK));
        }
        else{
            return \App::abort(404);
        }
    }

    private function doexec($data){
        if( file_exists($data['LOCAL_REPO']) ) {
            return shell_exec("cd {$data['LOCAL_REPO']} && git pull origin {$data['BRANCH']}");
        } else {
            return shell_exec("cd {$data['LOCAL_ROOT']} && git clone {$data['REMOTE_REPO']} && composer install");
        }
    }

}
