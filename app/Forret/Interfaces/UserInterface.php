<?php  namespace Forret\Interfaces;

interface UserInterface {
    public function all();
    public function find($id);
    public function createNew($data);
    public function destroy($id);
    public function update($id,$data);
    public function recent25();
    public function privatePage($user_id);
    public function undestroy($id);
    public function search($input);

    public function getCurrentSentryUser();
} 