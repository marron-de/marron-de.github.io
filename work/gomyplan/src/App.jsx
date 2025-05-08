import { BrowserRouter as Router, Route, Routes } from "react-router-dom";

// page
import EmailTemplate from "./pages/EmailTemplate";
import EmailWelcome from "./pages/EmailWelcome";
import EmailPassword from "./pages/EmailPassword";
import EmailBooking from "./pages/EmailBooking";

import Main from "./pages/Main"; 
import PrivatePlans from "./pages/PrivatePlans";
import PublishedPlans from "./pages/PublishedPlans";
import PlanPolicies from "./pages/PlanPolicies";
import CreatePlan from "./pages/CreatePlan";
import CreatePlan2 from "./pages/CreatePlan2";
import CreateDetail from "./pages/CreateDetail";
import PlanSchedule from "./pages/PlanSchedule";
import PlanActivity from "./pages/PlanActivity";
import AddPlanPhoto from "./pages/AddPlanPhoto";
import SelectPlanPhoto from "./pages/SelectPlanPhoto";
import PlanComments from "./pages/PlanComments";
import CreateOption from "./pages/CreateOption";
import CreateOption2 from "./pages/CreateOption2";
import Spots from "./pages/Spots"; 
import PlansList from "./pages/PlansList"; 
import SpotsLocation from "./pages/SpotsLocation"; 
import MemberInfo from "./pages/MemberInfo"; 
import CreateAccount from "./pages/CreateAccount"; 
import SignIn from "./pages/SignIn"; 
import PasswordReset from "./pages/PasswordReset"; 
import ChangeInformation from "./pages/ChangeInformation"; 
import PlanDetails from "./pages/PlanDetails"; 
import Reservation from "./pages/Reservation"; 
import MyPlanDetails from "./pages/MyPlanDetails"; 
import ReservationWrite from "./pages/ReservationWrite"; 
import PlanManager from "./pages/PlanManager"; 
import ReservationPlans from "./pages/ReservationPlans"; 
import Payment from "./pages/Payment"; 
import ReservationWrite2 from "./pages/ReservationWrite2"; 
import ReservationSummary from "./pages/ReservationSummary"; 

// css
import "./css/Bootstrap.css";
import "./css/Style.css";

function App() {
  return (
    <Router>
      <div className="wrap" lang="en">
        <Routes>

          {/* 이메일 */}
          <Route path="./emailTemplate" element={<EmailTemplate />} />
          <Route path="./emailWelcome" element={<EmailWelcome />} />
          <Route path="./emailPassword" element={<EmailPassword />} />
          <Route path="./emailBooking" element={<EmailBooking />} />


          {/* 1~3.메인 */}
          <Route path="./" element={<Main />} /> 
          {/* 4.비공개플랜 */}
          <Route path="./privatePlans" element={<PrivatePlans />} />
          {/* 4.비공개플랜&공개플랜 약관 */}
          <Route path="/plangPolicies" element={<PlanPolicies />} />
          {/* 5.공개플랜 */}
          <Route path="/publishedPlans" element={<PublishedPlans />} />
          {/* 6.플랜만들기 1단계 */}
          <Route path="/createPlan" element={<CreatePlan />} />
          {/* 7.플랜만들기 2단계 */}
          <Route path="/createPlan2" element={<CreatePlan2 />} />
          {/* 8.플랜만들기 플랜 상세 */}
          <Route path="/createDetail" element={<CreateDetail />} />
          {/* 9.플랜만들기 플랜 스케줄 */}
          <Route path="/planSchedule" element={<PlanSchedule />} />
          {/* 10.플랜만들기 액티비티 */}
          <Route path="/planActivity" element={<PlanActivity />} />
          {/* 11.플랜만들기 사진추가 */}
          <Route path="/addPlanPhoto" element={<AddPlanPhoto />} />
          {/* 12.플랜만들기 사진선택 */}
          <Route path="/selectPlanPhoto" element={<SelectPlanPhoto />} />
          {/* 13.댓글 */}
          <Route path="/planComments" element={<PlanComments />} />
          {/* 14.플랜 옵션1 */}
          <Route path="/createOption" element={<CreateOption />} />
          {/* 15.플랜 옵션2 */}
          <Route path="/createOption2" element={<CreateOption2 />} />                    
          {/* 16.스팟 메인 */}
          <Route path="/spots" element={<Spots />} />
          {/* 17~19.플랜 목록 + 필터 모달 + 정렬 모달 */}
          <Route path="/plansList" element={<PlansList />} />
          {/* 20.스팟 상세(위치) */}
          <Route path="/spotsLocation" element={<SpotsLocation />} />
          {/* 21.멤버 정보 */}
          <Route path="/memberInfo" element={<MemberInfo />} />
          {/* 22.회원가입 */}
          <Route path="/createAccount" element={<CreateAccount />} /> 
          {/* 23.로그인 */}
          <Route path="/signIn" element={<SignIn />} /> 
          {/* 24.비밀번호 재설정 */}
          <Route path="/passwordReset" element={<PasswordReset />} />
          {/* 25.내정보 수정 */}
          <Route path="/changeInformation" element={<ChangeInformation />} />
          {/* 26~30.플랜 상세 + 캘린더 모달 + 커스텀 모달 + 상세정보 모달 + 인원수 모달*/}
          <Route path="/planDetails" element={<PlanDetails />} />
          {/* 31.플랜 예약*/}
          <Route path="/reservation" element={<Reservation />} />
          <Route path="/myPlanDetails" element={<MyPlanDetails />} />
          {/* 32.플랜 예약 글작성*/}
          <Route path="/reservationWrite" element={<ReservationWrite />} />
          {/* 33.플랜 매니저*/}
          <Route path="/planManager" element={<PlanManager />} />
          <Route path="/reservationPlans" element={<ReservationPlans />} />
          {/* 34.결제*/}
          <Route path="/payment" element={<Payment />} />

          {/* 35.플랜 예약 글작성 완료 모달*/}
          <Route path="/reservationWrite2" element={<ReservationWrite2 />} />
          {/* 36.플랜 예약*/}
          <Route path="/reservationSummary" element={<ReservationSummary />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
