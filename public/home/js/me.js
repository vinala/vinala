$(document).ready(function (){

    function msg (msg) {
        alert(msg);
    }

	$('#new_migrate').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_migration.php',$('#new_migrate').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#exec_last_migrate').submit(function () {
        $.post('public/'+panelFolder+'/ajax/exec_migration.php',$('#formf2').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#rollback_last_migrate').submit(function () {
        $.post('public/'+panelFolder+'/ajax/rollback_migration.php',$('#formf3').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#exec_cos_migrate').submit(function () {
        $.post('public/'+panelFolder+'/ajax/exec_cos_migration.php',$('#exec_cos_migrate').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#rollback_cos_migrate').submit(function () {
        $.post('public/'+panelFolder+'/ajax/rollback_cos_migration.php',$('#exec_cos_migrate').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#new_link').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_link.php',$('#new_link').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#new_seed').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_seed.php',$('#new_seed').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#run_seed').submit(function () {
        $.post('public/'+panelFolder+'/ajax/exec_seed.php',$('#run_seed').serialize(),function(data)
            {
                alert(data);
            });
        //
        return false;
    });

    $('#new_lang_dir').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_dir_lang.php',$('#new_lang_dir').serialize(),function(data)
            {
                alert(data);
                if(data=="okey") $('#new_lang_dir').reset();
            });
        //
        return false;
    });

    $('#new_lang_file').submit(function () {
        if(document.getElementById('lang_file_name').value!="")
        {
            $.post('public/'+panelFolder+'/ajax/new_lang_file.php',$('#new_lang_file').serialize(),function(data)
            {
                //msg(data);
                alert(data);
                //if(data=="okey") $('#new_lang_file').reset();
            });
        }
        else
        {
            msg('vous devez ajouter le nom de fichier');
        }
        
        //
        return false;
    });

    $('#new_models').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_model.php',$('#new_models').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#new_view').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_view.php',$('#new_view').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });

    $('#new_controller').submit(function () {
        $.post('public/'+panelFolder+'/ajax/new_controller.php',$('#new_controller').serialize(),function(data)
            {
                msg(data);
            });
        //
        return false;
    });
});