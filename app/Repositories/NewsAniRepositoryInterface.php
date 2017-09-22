<?php
namespace App\Repositories;
interface NewsAniRepositoryInterface{
  function getAllNewsAni();
  function addNewsAni($head_News,$adminId,$newImageName,$content,$news_type);
  function deleteNews($news_id);
}
