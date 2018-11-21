<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class SeedQuestionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $questions = [
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'底盘部件检查包含哪些检验项目？那些车型应使用底盘间隙仪？',       
                'answer'        =>'转向系部件、传动系部件、行驶系部件、制动系部件、其他部件；大中型客车、重中型货车、转向作业车、挂车检查时应使用底盘间隙仪',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'什么是多用途货车？',       
                'answer'        =>'多用途货车是指具有长头车身和驾驶室结构、核定乘坐人数小于等于5人（含驾驶人）、驾驶室高度小于等于2100mm、货箱栏板上端离地高度小于等于1500mm、最大设计总质量小于等于3500kg的货车。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'请问能够影响到检测结果评价的登录信息有哪些？',       
                'answer'        =>'1、区分注册登记检验和在用车检验，关系到制动和灯光的判定标准不同。2、区分二灯制、四灯制；3、区分独立悬架、非独立悬架和双导向轮，关系到侧滑否判定；3、区分是否乘用车；4、区分空载、满载；5、对于客车区分总质量是否大于3.5吨；6、区分远光是否可调整；7、区分是否为汽车列车；8、初次登记日期，关系到使用年限是否超10年；9、车辆使用性质，是否是营运车辆；10、区分车辆类型，不同车辆类型检验项目不一样；11、是否出过造成人员伤亡的交通事故，对发生过造成人员伤亡交通事故的送检机动车，人工检验时应重点检查损伤部位和损伤情况，属于使用年限在10年以内的非营运小型、微型载客汽车的，增加底盘动态检验、车辆底盘部件检查。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'简述在空载车状态下，对前照灯远光光束垂直偏移量的要求？',       
                'answer'        =>'前照灯远光光束照射在距离 10m的屏幕上，其发光强度最大点的垂直方向位置，应不高于远光光束透光面中心所在水平面（高 度值为H）以上100mm的直线且不低于远光光束透光面中心所在水平面以下0.2H的直线。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'简述对送检机动车的基本要求。',       
                'answer'        =>'送检机动车应清洁，无明显漏油、漏水、漏气现象，轮胎完好，轮胎气压正常且胎冠花纹中午异物，发动机运转平稳，怠速稳定，无异响；装有车载诊断系统（OBD）的车辆，不应有与防抱死制动系统（ABS）、电动助力转向系统（EPS）及其他与行车安全相关的故障信息。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'描述机动车安全性能检验检测依据的主要标准。',       
                'answer'        =>'GB7258-2017机动车运行安全技术条件； GB21861-2014机动车安全技术检验项目和方法； GB1589-2016汽车、挂车及汽车列车外廓尺寸、轴荷及质量限值； GB25990-2010车辆尾部标识板； GB23254-2009货车及挂车车身反光标识',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'3',
                'title'         =>'描述机动车安全性能检验检测依据的主要标准。',       
                'answer'        =>'GB7258-2017机动车运行安全技术条件； GB21861-2014机动车安全技术检验项目和方法； GB1589-2016汽车、挂车及汽车列车外廓尺寸、轴荷及质量限值； GB25990-2010车辆尾部标识板； GB23254-2009货车及挂车车身反光标识',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'2',
                'title'         =>'你机构机动车排放尾气检测所用主要标准。',       
                'answer'        =>'GB18285－2005《点燃式发动机汽车排气污染物排放限值及测量方法（双怠速法及简易工况法）》；DB37/657-2011《山东省点燃式发动机在用轻型汽车排气污染物排放限值》；GB3847-2005《车用压燃式发动机和压燃式发动机汽车排气烟度排放限值及测量方法》；GB18322-2002《农用运输车自由加速烟度排放限值及测量方法》',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'2',
                'title'         =>'你机构机动车环保检测所用主要设备。',       
                'answer'        =>'汽车排气流量分析仪；机动车排放气体分析仪；汽车底盘测功机；转速分析仪；透射式烟度计；全自动烟度计（可能有）',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'2',
                'title'         =>'你机构机动车环保检测所用主要设备。',       
                'answer'        =>'汽车排气流量分析仪；机动车排放气体分析仪；汽车底盘测功机；转速分析仪；透射式烟度计；全自动烟度计（可能有）',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'2',
                'title'         =>'简述双怠速法的测量过程？',       
                'answer'        =>'1、应保证被检测车辆处于制造厂规定的正常状态，发动机进气系统应装有空气滤清器，排气系统应装有排气消声器，并不得有泄漏。2、应在发动机上安装转速计、点火正时仪、冷却液和润滑油测温计等测量仪器。测量时，发动机冷却液和润滑油温度应不低于80℃，或者达到汽车使用说明书规定的热车状态。3、发动机从怠速状态加速至 70%额定转速，运转 30s 后降至高怠速状态。将取样探头插入排气管中，深度不少于400mm，并固定在排气管上。维持15s后，由具有平均值功能的仪器读取30s内的平均值，或者人工读取 30s 内的最高值和最低值，其平均值即为高怠速污染物测量结果。对于使用闭环 控制电子燃油喷射系统和三元催化转化器技术的汽车，还应同时读取过量空气系数（λ）的数值。4、发动机从高怠速降至怠速状态 15s 后，由具有平均值功能的仪器读取 30s 内的平均值，或者人工读取30s内的最高值和最低值，其平均值即为怠速污染物测量结果。5、若为多排气管时，取各排气管测量结果的算术平均值作为测量结果。6、若车辆排气管长度小于测量深度时，应使用排气加长管。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'1',
                'title'         =>'检验检测机构当设备出现故障或者异常时处理措施。',       
                'answer'        =>'设备出现故障或者异常时，检验检测机构应采取相应措施，如停止使用、隔离或加贴停用标签、标记，直至修复并通过检定、校准或核查表明设备能正常工作为止。应核查这些缺陷或超出规定限度对以前检验检测结果的影响。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'1',
                'title'         =>'检验检测机构的定义是什么？',       
                'answer'        =>'依法成立，依据相关标准或者技术规范，利用仪器设备、环境设施等技术条件和专业技能，对产品或者法律法规规定的特定对象进行检验检测的专业技术组织。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'1',
                'title'         =>'资质认定评审的定义是什么？',       
                'answer'        =>'国家认证认可监督管理委员会和省级质量技术监督部门依据《中华人民共和国行政许可法》的有关规定，自行或者委托专业技术评价机构，组织评审人员，对检验检测机构的基本条件和技术能力是否符合《检验检测机构资质认定评审准则》和评审补充要求所进行的审查和考核。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'1',
                'title'         =>'资质认定的定义是什么？',       
                'answer'        =>'国家认证认可监督管理委员会和省级质量技术监督部门依据有关法律法规和标准、技术规范的规定，对检验检测机构的基本条件和技术能力是否符合法定要求实施的评价许可。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'4',
                'title'         =>'JT/T198-2016《道路运输车辆技术等级划分和评定要求》中的分级项有哪些？',       
                'answer'        =>'1、转向盘最大自由转动量 （人工检验部分）；2、轮胎胎冠花纹深度 （人工检验部分）；3、门窗玻璃 （人工检验部分）； 4、 车身与驾驶室（人工检验部分）；5、车身表面涂装 （人工检验部分）； 6、车身两侧对称高度差（人工检验部分）；7、动力性（线内性能部分）；8、制动不平衡率（线内性能部分）',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'4',
                'title'         =>'道路运输车辆的检验结果按照JT/T198应如何判定？',       
                'answer'        =>'一级车： 1“核查评定项目”达到一级；2“关键项”均为合格；3“一般项”的不合格项数不超过3项；4“分级项”达到一级。二级车：1“核查评定项目”至少达到二级；2“关键项”均为合格；3“一般项”的不合格项数不超过6项；4“分级项”至少达到二级。不符合一级和二级要求的车辆评定为不合格车辆。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'4',
                'title'         =>'机动车综合性能检验所用主要标准有那些？',       
                'answer'        =>'GB18565-2016《道路运输车辆综合性能要求和检验方法》；GB7258-2012《机动车运行安全技术条件》；JT/T198-2016《道路运输车辆技术等级划分和评定要求》；GB/T18566-2011《道路运输车辆燃料消耗量检测评价方法》；GB1589-2016《汽车、挂车及汽车列车外廓尺寸、轴荷及质量限值》；GB18285－2005《点燃式发动机汽车排气污染物排放限值及测量方法（双怠速法及简易工况法）》；GB3847-2005《车用压燃式发动机和压燃式发动机汽车排气烟度排放限值及测量方法》',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
            [
                'user_id'       =>'1',
                'qcategory_id'  =>'4',
                'title'         =>'简述点燃式发动机车辆的动力性检验步骤？',       
                'answer'        =>'1 被检车辆驱动轮置于底盘测功机滚筒上, 根据车型调整侧移限位和系留装置，在非驱动轮加装停车楔。2 底盘测功机设置为恒力控制方式，力、速度等参数示值调零。3 底盘测功机不加载的条件下，起动被检车辆，逐步加速，选择变速箱第3档位，采用加速踏板控制车速，当外接转速表(外接转速表无法稳定测取转速时，可观察发动机转速表）的转速稳定指向发动机额定扭矩转速ｎm时, 测取当前驱动轮轮边线速度 ，记作额定扭矩车速Vm。当额定扭矩车速Vm大于80km/h时，应降低1个档位，重新测取额定扭矩车速Vm。注：当额定扭矩转速为ｎm 1 ～ｎm 2时，ｎm取其均值。当ｎm大于4000 r/min时，按ｎm = 4000 r/min测取Vm 。4 踩下加速踏板使车速超过Vm，底盘测功机逐步进行恒力加载至（FM±20N）范围内并稳定3s后，开始测取车速，当3s内的车速波动不超过±0.5km/h时，该车速即为驱动轮轮边稳定车速Vw，检测结束。',
                'created_at'    =>Carbon::now()->toDateTimeString(),
                'updated_at'    =>Carbon::now()->toDateTimeString(),
            ],
        ];
        DB::table('questions')->insert($questions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('questions')->truncate();
    } 

}
