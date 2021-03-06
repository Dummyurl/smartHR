<div class="row">
    <!-- Start Form -->
    <div class="col-lg-12">
        <?php
        $attributes = array('class' => 'bs-example form-horizontal');
        echo form_open_multipart('settings/update', $attributes); ?>
            <div class="panel panel-white">
                <div class="panel-heading">
					<h3 class="panel-title"><?=lang('company_details')?></h3>
				</div>
                <div class="panel-body">
                    <input type="hidden" name="settings" value="<?=$load_setting?>">
                    <input type="hidden" name="languages" value="<?=implode(",",$translations)?>">

                    <?php if (count($translations) > 0) : ?>

                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="active" data-toggle="tab" href="#tab-english">English</a></li>
                        <?php foreach($translations as $lang) : ?>
                            <li><a data-toggle="tab" href="#tab-<?=$lang?>"><?=ucfirst($lang);?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content tab-content-fix">
                        <div class="tab-pane fade in active" id="tab-english">
                            <?php endif; ?>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_name')?> <span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <input type="text" name="company_name" class="form-control" value="<?=config_item('company_name')?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_legal_name')?> <span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <input type="text" name="company_legal_name" class="form-control" value="<?=config_item('company_legal_name')?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('contact_person')?> </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control"  value="<?=config_item('contact_person')?>" name="contact_person">
                                    <span class="help-block m-b-none"><?=lang('company_representative')?></strong>.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_address')?> <span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <textarea class="form-control ta" name="company_address" required><?=config_item('company_address')?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('zip_code')?> </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control"  value="<?=config_item('company_zip_code')?>" name="company_zip_code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('city')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_city')?>" name="company_city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('state_province')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_state')?>" name="company_state">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('country')?></label>
                                <div class="col-lg-5">
                                        <select class="select2-option" style="width:100%;" name="company_country" >
                                            <optgroup label="<?=lang('selected_country')?>">
                                                <option value="<?=config_item('company_country')?>"><?=config_item('company_country')?></option>
                                            </optgroup>
                                            <optgroup label="<?=lang('other_countries')?>">
                                                <?php foreach ($countries as $country): ?>
                                                    <option value="<?=$country->value?>"><?=$country->value?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_email')?></label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" value="<?=config_item('company_email')?>" name="company_email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_phone')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_phone')?>" name="company_phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_phone')?> 2</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_phone_2')?>" name="company_phone_2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('mobile_phone')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_mobile')?>" name="company_mobile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('fax')?> </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_fax')?>" name="company_fax">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_domain')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_domain')?>" name="company_domain">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_registration')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_registration')?>" name="company_registration">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_vat')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_vat')?>" name="company_vat">
                                </div>
                            </div>
                            <?php if (count($translations) > 0) : ?>
                        </div>
                        <?php foreach($translations as $lang) : ?>
                            <div class="tab-pane fade" id="tab-<?=$lang?>">

                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('company_name')?> </label>
                                    <div class="col-lg-5">
                                        <input type="text" name="company_name_<?=$lang?>" class="form-control" value="<?=config_item('company_name_'.$lang)?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('company_legal_name')?></label>
                                    <div class="col-lg-5">
                                        <input type="text" name="company_legal_name_<?=$lang?>" class="form-control" value="<?=config_item('company_legal_name_'.$lang)?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('contact_person')?> </label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control"  value="<?=config_item('contact_person_'.$lang)?>" name="contact_person_<?=$lang?>">
                                        <span class="help-block m-b-none"><?=lang('company_representative')?></strong>.</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('company_address')?> </label>
                                    <div class="col-lg-5">
                                        <textarea class="form-control ta" name="company_address_<?=$lang?>"><?=config_item('company_address_'.$lang)?></textarea>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('zip_code')?> </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control"  value="<?=config_item('company_zip_code_'.$lang)?>" name="company_zip_code_<?=$lang?>">
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('city')?></label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="<?=config_item('company_city_'.$lang)?>" name="company_city_<?=$lang?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('state_province')?></label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="<?=config_item('company_state_'.$lang)?>" name="company_state_<?=$lang?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-3 control-label"><?=lang('country')?></label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" value="<?=config_item('company_country_'.$lang)?>" name="company_country_<?=$lang?>">
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_email')?></label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" value="<?=config_item('company_email_'.$lang)?>" name="company_email_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_phone')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_phone_'.$lang)?>" name="company_phone_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_phone')?> 2</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_phone_2_'.$lang)?>" name="company_phone_2_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('mobile_phone')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_mobile_'.$lang)?>" name="company_mobile_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('fax')?> </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_fax_'.$lang)?>" name="company_fax_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_domain')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_domain_'.$lang)?>" name="company_domain_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_registration')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_registration_'.$lang)?>" name="company_registration_<?=$lang?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?=lang('company_vat')?></label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" value="<?=config_item('company_vat_'.$lang)?>" name="company_vat_<?=$lang?>">
                                </div>
                            </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
					<div class="text-center m-t-30">
                        <button type="submit" class="btn btn-primary btn-lg"><?=lang('save_changes')?></button>
					</div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Form -->
</div>