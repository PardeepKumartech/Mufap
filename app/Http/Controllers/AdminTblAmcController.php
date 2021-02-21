<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminTblAmcController extends CBController {


    public function cbInit()
    {
        $this->setTable("tbl_amc");
        $this->setPermalink("tbl_amc");
        $this->setPageTitle("Tbl Amc");

        $this->addText("Amcname","AMCName")->strLimit(150)->maxLength(255);
		$this->addText("Fkamctypeid","FKAMCTypeID")->strLimit(150)->maxLength(255);
		$this->addText("Amcaddress","AMCAddress")->strLimit(150)->maxLength(255);
		$this->addText("Amccontact","AMCContact")->strLimit(150)->maxLength(255);
		$this->addEmail("Amcemailaddress","AMCEmailAddress");
		$this->addDateTime("Amcincorporationdate","AMCIncorporationDate")->format("d/m/Y H:i:s");
		$this->addText("Fkauditorid","FKAuditorID")->strLimit(150)->maxLength(255);
		$this->addDateTime("Amcclosingdate","AMCClosingDate")->format("d/m/Y H:i:s");
		$this->addText("Membersince","MemberSince")->strLimit(150)->maxLength(255);
		$this->addText("Amcfax","AMCFax")->strLimit(150)->maxLength(255);
		$this->addText("Fkratingagencyid","FKRatingAgencyID")->strLimit(150)->maxLength(255);
		$this->addText("Url","URL")->strLimit(150)->maxLength(255);
		$this->addText("Ceoname","CEOName")->strLimit(150)->maxLength(255);
		$this->addText("Shortcode","ShortCode")->strLimit(150)->maxLength(255);
		

    }
}
