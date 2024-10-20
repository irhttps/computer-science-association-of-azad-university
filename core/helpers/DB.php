<?php

namespace helper;

use PDOException;

class DB
{

    private ?\PDO $pdo = null;

    function connection()
    {
        try {
            $this->pdo = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        } catch (\PDOException $err) {
            if (LOGGER) echo "Mysql error" . $err;
        }
    }

    function query($query)
    {
        if ($this->pdo == null)
            $this->connection();

        return $this->pdo->query($query);

    }

    function getExpertGroups(): array
    {
        if ($this->pdo == null)
            $this->connection();

        try {
            $st = $this->pdo->prepare("SELECT `key`, `name`, `desc`, `icon`, `class` FROM `expert_groups` WHERE `active` = '1' ORDER BY `sort` ASC");
            $st->execute();

            return ["status" => "OK", "result" => $st->fetchAll()];

        } catch (PDOException $e) {
            if (LOGGER) echo "Mysql error" . $err;
            return ["status" => "NOK"];
        }

    }

    function getExpertSubGroups()
    {

        if ($this->pdo == null)
            $this->connection();

        try {

            $sql = "SELECT id, id AS group_id ,  name, '' AS name_en, 'group' AS type
                    FROM expert_groups
                    
                    UNION ALL
                    
                    SELECT id , group_id, name, name_en, 'subgroup' AS type
                    FROM expert_sub_groups
                    
                    ORDER BY group_id, type;";

            $st = $this->pdo->prepare($sql);
            $st->execute();

            return ["status" => "OK", "result" => $st->fetchAll()];

        } catch (PDOException $e) {
            if (LOGGER) echo "Mysql error" . $err;
            return ["status" => "NOK"];
        }

    }

    function newUser($fullname , $mobile , $year , $half , $group_key , $sub_groups , $worked , $interaction , $status , $user_agent , $create_time): array
    {
        if ($this->pdo == null)
            $this->connection();

        try {
            $st = $this->pdo->prepare("
            INSERT INTO `expert_user` (`fullname`, `mobile`, `year`, `half`, `group_key`, `sub_groups`, `worked`, `interaction`, `status`, `user_agent`, `create_time`)
            VALUES (:fullname, :mobile, :year, :half, :group_key, :sub_groups, :worked, :interaction, :status, :user_agent, :create_time)");

            $st->bindParam(':fullname', $fullname);
            $st->bindParam(':mobile', $mobile);
            $st->bindParam(':year', $year);
            $st->bindParam(':half', $half);
            $st->bindParam(':group_key', $group_key);
            $st->bindParam(':sub_groups', $sub_groups);
            $st->bindParam(':worked', $worked);
            $st->bindParam(':interaction', $interaction);
            $st->bindParam(':status', $status);
            $st->bindParam(':user_agent', $user_agent);
            $st->bindParam(':create_time', $create_time);

            $st->execute();

            return ["status" => "OK"];

        } catch (PDOException $e) {
            if (LOGGER) echo "Mysql error" . $err;
            return ["status" => "NOK"];
        }

    }


}