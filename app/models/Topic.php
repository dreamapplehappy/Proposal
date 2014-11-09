<?php

class Topic extends Eloquent {

    protected $fillable = array('title', 'body','user_id','reply_count','vote_count','deadline','importance');

    public static $rules = array(
        'title' => 'required|unique:topics',
        'body'  => 'required',
        'deadline' => 'required|date',
        'importance' => 'required|digits_between:1,5'
    );


    public function user()
    {
        return $this->belongsTo('User');
    }

    public function replies()
    {
        return $this->hasMany('Reply');
    }

    public function votes()
    {
        return $this->hasMany('Vote');
    }

    public function voteCount($voted){
        if($voted){
            $this->vote_count +=1;
        }
        else{ $this->vote_count -=1; }
        $this->save();
        return true;
    }

    public static function topicsPass(){
        $now = date('Y-m-d H:i:s');
        $topics_pass = Topic::where('deadline','<', $now)->paginate(5);
        return $topics_pass;
    }

    public static function topicsNotPass(){
        $now = date('Y-m-d H:i:s');
        $topics_not_pass = Topic::where('deadline', '>=', $now)->paginate(5);
        return $topics_not_pass;
    }
}
