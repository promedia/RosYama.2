					Не исключена вероятность того, что на <a href="http://www.gosuslugi.ru/ru/chorg/index.php?ssid_4=4120&stab_4=4&rid=228&tid=2" target="_blank">сайте госуслуг</a> окажется немного полезной информации.
					
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'request-form',
						'enableAjaxValidation'=>false,
						'action'=>Yii::app()->createUrl("holes/request", array("id"=>$hole->ID)),
						'htmlOptions'=>Array ('onsubmit'=>"document.getElementById('pdf_form').style.display='none';"),
					)); 
					$model=new HoleRequestForm;
					$model->to=$gibdd ? $gibdd->post_dative.' '.$gibdd->fio_dative : '';
					$model->from=CHtml::encode(Yii::app()->user->userModel->last_name.' '.Yii::app()->user->userModel->name.' '.Yii::app()->user->userModel->second_name);
					$model->address=CHtml::encode($hole->ADDRESS);
					$model->signature=CHtml::encode(Yii::app()->user->userModel->last_name.' '.substr(Yii::app()->user->userModel->name, 0, 2).(Yii::app()->user->userModel->name ? '.' : '').' '.substr(Yii::app()->user->userModel->second_name, 0, 2).(Yii::app()->user->userModel->second_name ? '.' : ''));
					?>					
						<h2><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM') ?></h2>
						<table>
							<tr>
								<th><?php echo $form->labelEx($model,'to'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_TO_COMMENT') ?></span></th>
								<td><?php echo $form->textArea($model,'to',array('rows'=>3, 'cols'=>40)); ?></td>
							</tr>
							<tr>
								<th><?php echo $form->labelEx($model,'from'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_FROM_COMMENT') ?></span></th>
								<td><?php echo $form->textArea($model,'from',array('rows'=>3, 'cols'=>40)); ?></td>
							</tr>
							<tr>
								<th><?php echo $form->labelEx($model,'postaddress'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_POSTADDRESS_COMMENT') ?></span></th>
								<td><?php echo $form->textArea($model,'postaddress',array('rows'=>3, 'cols'=>40)); ?></td>
							</tr>
							<tr>
								<th><?php echo $form->labelEx($model,'address'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_ADDRESS_COMMENT') ?></span></th>
								<td><?php echo $form->textArea($model,'address',array('rows'=>3, 'cols'=>40)); ?></td>
							</tr>
							<? if($hole->type->alias == 'light'): ?>
								<tr>
									<th><?php echo $form->labelEx($model,'comment'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_COMMENT_COMMENT') ?></span></th>
									<td><?php echo $form->textArea($model,'comment',array('rows'=>3, 'cols'=>40)); ?></td>
								</tr>
							<? endif; ?>
							<tr>
								<th><?php echo $form->labelEx($model,'signature'); ?><span class="comment"><?= Yii::t('holes_view', 'HOLE_REQUEST_FORM_SIGNATURE_COMMENT') ?></span></th>
								<td><?php echo $form->textField($model,'signature',array('class'=>'textInput')); ?></td>
							</tr>
							<tr>
								<th></th>
								<td>
									<?php echo CHtml::submitButton(Yii::t('holes_view', 'HOLE_REQUEST_FORM_SUBMIT'), Array('class'=>'submit', 'name'=>'HoleRequestForm[pdf]')); ?>
									<?php echo CHtml::submitButton(Yii::t('holes_view', 'HOLE_REQUEST_FORM_SUBMIT2'), Array('class'=>'submit', 'name'=>'HoleRequestForm[html]')); ?>
								</td>
							</tr>
						</table>
					<?php $this->endWidget(); ?>
					<?= Yii::t('holes_view', 'ST1234_INSTRUCTION') ?>
